<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;

    protected $fillable =[
        'name','slug'
    ];

    /**
     * One to many relationship with product model
     * @return void
     */
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}