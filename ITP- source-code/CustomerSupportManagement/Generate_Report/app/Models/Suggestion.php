<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suggestion extends Model
{
    protected $table = 'suggestions';
    protected $primaryKey = 'id';
    protected $fillable = ['Name', 'Address', 'Phone', 'Email', 'Subject', 'Message',];
}
