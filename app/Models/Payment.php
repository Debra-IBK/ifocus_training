<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    const STATUS = ['success' => 'success', 'pending' => 'pending', 'failed' => 'failed', 'timeout' => 'timeout'];

    const PAYPAL_STATUS = ['CREATED', 'SAVED','APPROVED','VOIDED','COMPLETED','PAYER_ACTION_REQUIRED'];

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['user_id', 'id', 'reference_id', 'deleted_at', 'created_at', 'updated_at'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['user_id'];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'meta_data' => 'array',
    ];

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
