<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PayType extends Model
{
    protected $table = 'paytypes';
    protected $guarded = ['id'];
}
