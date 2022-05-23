<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $table = 'feedbackss';
    protected $primaryKey = 'id';
    protected $fillable = ['Name', 'Email', 'Comment', 'Overall Experience', 'Timely response', 'Our Support', 'Overall Satisfaction'];
}
