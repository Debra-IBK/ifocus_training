<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserCourse extends Model
{
    // 
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id', 'user_id', 'deleted_at', 'created_at', 'updated_at'];

    /** 
     * The "booted" method of the model.
     *
     * @return void
     */
    protected static function booted()
    {
        static::creating(function ($user_course) {
            $user_course->user_id = auth()->user()->id;
        });
    }

    /**
     * Get the user that owns the course.
     */
    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

     /**
     * Get the user that owns the course.
     */
    public function course()
    {
        return $this->hasOne(Courses::class, 'id', 'course_id');
    }
    
    public static function getPaidCourse(User $user)
    {
        return UserCourse::where('user_id', $user->id)->with(['course'])->latest('created_at')->take(20)->get();
    }
}
