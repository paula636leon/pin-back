<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;
    public $fillable = ['npmbre', 'email', 'edad', 'pass', 'pass_confirmation',];
}
