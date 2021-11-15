<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskCategory extends Model
{
    use HasFactory;

    protected $table = 'task_categories';
    protected $guarded = [''];

    public function task(){
        return $this->belongsTo(Task::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
