<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin_Privilege extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $table="admin_privileges";
}
