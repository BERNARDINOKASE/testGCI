<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Transaction extends Model
{
    use HasFactory;
    protected $guard = [];
    protected $fillable = [
        'id',
        'user_id',
        'voucher_id',
    ];

    /**
     * Get the user associated with the Transaction
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function voucher(): HasOne
    {
        return $this->hasOne(Voucher::class);
    }
    public function product()
    {
        return $this->hasMany(Products::class);
    }
}
