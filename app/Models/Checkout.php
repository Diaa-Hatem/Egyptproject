<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    use HasFactory;
    protected $fillable=['id','country','first_name' , 'last_name' , 'governorate','apartment' , 'city' , 'address' , 'email' , 'phone','notes'];

    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }
}

