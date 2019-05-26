<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Sector extends Model
{

    protected $fillable = ['name', 'address', 'website', 'about', 'industry_id'];
}
