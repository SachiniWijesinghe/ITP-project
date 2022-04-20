<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class itemImages extends Model
{
    use HasFactory;

    protected $table = 'item_images';

    protected $primaryKey = 'image_id';

    public function Items(){
        return $this->belongsTo(Items::class);
    }
}
