<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Selling extends Model
{
    use HasFactory;

    protected $fillable = [
        'code_trans',
        'customer_id',
        'cashier_id',
        'date_sell',
        'product_status',
        'grand_total',
    ];

    public function details(){
        return $this->hasMany(SellingDetail::class, 'id', 'id_sell');
    }
}
