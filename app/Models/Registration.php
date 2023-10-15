<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;

    protected $table = 'registration_tbl'; 
    protected $fillable = [
        'name',
        'email',
        'password',
        'ip_address',
        'browser',
        'submit_date',
    ];
}
