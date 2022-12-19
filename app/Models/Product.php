<?php

namespace App\Models;

use App\Enums\ProductStatusEnum;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'body', 'status'
    ];
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    protected $casts = [
        'status' => ProductStatusEnum::class
    ];
}
