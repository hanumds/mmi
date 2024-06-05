<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SellingDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'code_trans',
        'product_id',
        'product_name',
        'selling_price',
        'qty',
        'sub_total',
        'id_sell',
    ];

    public function sell(){
        return $this->belongsTo(Selling::class, 'id_sell');
    }
}
