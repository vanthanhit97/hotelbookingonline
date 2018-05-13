<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BillPay extends Model
{
    protected $table = 'billpays';
    protected $guarded = ['id'];
}
