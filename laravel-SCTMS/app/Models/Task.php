<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Task extends Model
{

    protected $fillable = [
        'student_id',
        'task1',
        'task2',
        'task3',
        'task4',
        'task5',
        'response1',
        'response2',
        'response3',
        'response4',
        'response5',
        'evaluated',
        'evaluation_comments',
        'performance_rating',
    ];
    
    public function student()
    {
        return $this->belongsTo(User::class, 'student_id');
    }

    public function scopePending($query, $responseColumn)
    {
        return $query->whereNull($responseColumn);
    }
    
    public function scopeCompleted($query, $responseColumn)
    {
        return $query->whereNotNull($responseColumn);
    }
    
}
