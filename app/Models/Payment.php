<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    const STATUS = ['success' => 'success', 'pending' => 'pending', 'failed' => 'failed', 'timeout' => 'timeout'];

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['user_id', 'reference_id', 'deleted_at', 'created_at', 'updated_at'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['user_id'];

    /** 
     * The "booted" method of the model.
     *
     * @return void
     */
    protected static function booted()
    {
        static::creating(function ($payment) {
            $payment->user_id = auth()->user()->id;
            $payment->reference_id = \App\Traits\GenerateUniqueIdentity::generateReference('payments', 'reference_id'); // Generate Unique Wallet ID
        });
    }
}
