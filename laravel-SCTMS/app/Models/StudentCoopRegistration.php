<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;
use App\Models\CoopTrainingProgram;
use App\Models\User;


class StudentCoopRegistration extends Model
{
    protected $table = 'student_coop_registrations';

    protected $fillable = [
        'coop_id',
        'student_id',
        // Add any additional fillable attributes
    ];

    public function coop()
    {
        return $this->belongsTo(CoopTrainingProgram::class, 'coop_id');
    }

    public function student()
    {
        return $this->belongsTo(User::class, 'student_id');
    }
    
}
