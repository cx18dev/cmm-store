<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CmmQuote extends Model
{
    protected $fillable = ['name','email','phone_number','company_name','cmm_name','cmm_stock_number','message'];
}
