<?php
namespace App\Traits;

use App\Models\Role;
use App\Models\Permission;
trait HasRolesAndPermissions
{
    /**
     * @return mixed
     */
    public function roles()
    {
        return $this->belongsToMany(Role::class,'users_roles');
    }

    /**
     * @return mixed
     */
    public function permissions()
    {
        return $this->belongsToMany(Permission::class,'users_permissions');
    }

    // In this function, we are passing $roles array 
    // and running a for each loop on each role to 
    // check if the current user’s roles contain the given role.

    public function hasRole(... $roles ) {
        foreach ($roles as $role) {
            if ($this->roles->contains('slug', $role)) {
                return true;
            }
        }
        return false;
    }


    //  The method below will check if the user’s permissions
    //  contain the given permission, if yes then it will 
    //  return true otherwise false.

    protected function hasPermission($permission)
    {
        return (bool) $this->permissions->where('slug', $permission->slug)->count();
    }
    
    /**
     * @param $permission
     * @return bool
     */

    
    protected function hasPermissionTo($permission)
    {
        // return $this->hasPermission($permission);
        // this will check if a user has the permissions directly or through a role
        return $this->hasPermissionThroughRole($permission) || $this->hasPermission($permission);
    }


    // this method enables us to check if a user has permission through its role
    // it checks if the permission’s role is attached to the user or not

    public function hasPermissionThroughRole($permission)
    {
        foreach ($permission->roles as $role){
            if($this->roles->contains($role)) {
                return true;
            }
        }
        return false;
    }


    // to get all permissions based on an array passed
    protected function getAllPermissions(array $permissions)
    {
        return Permission::whereIn('slug',$permissions)->get();
    }
    
    /**
     * @param mixed ...$permissions
     * @return $this
     */

    //  pass permissions as an array and get all permissions from the database based on the array
    public function givePermissionsTo(... $permissions)
    {
        $permissions = $this->getAllPermissions($permissions);
        if($permissions === null) {
            return $this;
        }
        $this->permissions()->saveMany($permissions);
        return $this;
    }


    // To delete permissions for a user, we pass permissions
    //  to our deletePermissions() method and remove all attached
    //  permissions using the detach() method.

    public function deletePermissions(... $permissions )
    {
        $permissions = $this->getAllPermissions($permissions);
        $this->permissions()->detach($permissions);
        return $this;
    }
    
    /**
     * @param mixed ...$permissions
     * @return HasRolesAndPermissions
     */
    public function refreshPermissions(... $permissions )
    {
        $this->permissions()->detach();
        return $this->givePermissionsTo($permissions);
    }
}