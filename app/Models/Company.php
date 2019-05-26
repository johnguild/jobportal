<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Company extends Model
{

    protected $fillable = ['name', 'address', 'website', 'about', 'industry_id'];
}
