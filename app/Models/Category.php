<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\User;
use App\Models\Task;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'color',
        'user_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}
