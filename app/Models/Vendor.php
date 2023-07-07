<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    protected $table = "vendors";
    protected $fillable = [
        'name',
        'email',
        'image',
        'contact',
        'contact2',
        'password',
        'status',
        'verify_code',
    ];


}
