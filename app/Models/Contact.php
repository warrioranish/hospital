<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model,
    Carbon\Carbon;

class Contact extends Model
{
    protected $fillable = ['name', 'subject', 'phone_num', 'email', 'message'];

}