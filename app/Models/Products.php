<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $guard = [];
    protected $fillable = [
        'id',
        'name',
        'description',
        'price',
        'quantity',
        'image',
    ];

    public function transaction()
    {
        return $this->belongsTo(Transaction::class);
    }
}
