<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $table = 'tasks';
    protected $guarded = [''];

    public function list(){
        return $this->belongsTo(Lists::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function subtask(){
        return $this->hasMany(Subtask::class,'task_id');
    }

    public function taskcategory(){
        return $this->hasMany(TaskCategory::class,'task_id');
    }
}
