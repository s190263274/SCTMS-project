<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Evaluation extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'evaluation1',
        'evaluation2',
        'evaluation3',
    ];

    public function student()
    {
        return $this->belongsTo(User::class, 'student_id');
    }

    public function coop()
    {
        return $this->belongsTo(CoopTrainingProgram::class, 'coop_id');
    }
}
