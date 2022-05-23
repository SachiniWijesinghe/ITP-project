<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $table = 'feedbacks';
    protected $primaryKey = 'id';
    protected $fillable = ['Name', 'Email', 'Overall_Experience', 'Timely_Response', 'Our_Support', 'Overall_Satisfaction', 'Comment', ];
}
