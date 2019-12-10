<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Priceplan extends Model
{
    protected $table = 'priceplans';
    protected $fillable = ['title','description','price','image'];
}
