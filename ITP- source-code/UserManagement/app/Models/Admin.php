<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $table="admin";
    protected $table1="admin_privileges";
    protected $table2="admin_has_admin_privileges";
}
