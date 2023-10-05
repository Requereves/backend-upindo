<?php

namespace App\Models;

use Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory; 

        protected $fillable = [
            'type_id','vendor_id','unit_id','image','barcode','title','buy_price','sell_price','stock','tax_type','periode'
        ];

        protected function image():Attribute
        {
            return Attribute::make(
                get:fn($value)=>asset('/storage/products/'.$value),
            );
        }
    
}
