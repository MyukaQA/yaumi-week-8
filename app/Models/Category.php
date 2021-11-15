<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';
    protected $guarded = [''];

    public function taskcategory(){
        return $this->hasMany(TaskCategory::class,'category_id');
    }
}
