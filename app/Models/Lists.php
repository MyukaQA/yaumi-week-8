<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lists extends Model
{
    use HasFactory;

    protected $table = 'lists';
    protected $guarded = [''];

    public function color(){
        return $this->belongsTo(Color::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function task(){
        return $this->hasMany(Task::class,'list_id');
    }
}
