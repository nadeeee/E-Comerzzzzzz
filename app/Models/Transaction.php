<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = ['user_id'];

    public function detail(){
        return $this->hasMany('App\Models\TransactionDetail');
    }
}
