<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subtask extends Model
{
    use HasFactory;

    protected $table = 'subtasks';
    protected $guarded = [''];

    public function task(){
        return $this->belongsTo(Task::class);
    }
}
