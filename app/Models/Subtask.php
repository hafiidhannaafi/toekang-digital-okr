<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subtask extends Model
{
    use HasFactory;
    protected $table='subtasks';
    protected $fillable=[
        'task_id',
        'name',
        'status',
    ];


    public function tasks()
    {
        return $this->belongsTo(Task::class);
    }

}
