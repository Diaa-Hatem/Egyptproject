<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $fillable=['item_name','quantity','total','checkout_id'];

    public function checkout()
    {
        return $this->belongsTo(Checkout::class);
    }
}

