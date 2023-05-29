<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CoopTrainingProgram extends Model
{
    protected $fillable = [
        'name',
        'mentor_id',
        'supervisor_id',
        'start_date',
        'end_date',
        'registration_close_date',
    ];

    protected $dates = [
        'start_date',
        'end_date',
        'registration_close_date',
    ];

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
        'registration_close_date' => 'date',
    ];
    
    public function studentCoopRegistrations()
    {
        return $this->hasMany(StudentCoopRegistration::class, 'coop_id');
    }
    
    public function mentor(): BelongsTo
    {
        return $this->belongsTo(User::class, 'mentor_id');
    }

    public function supervisor(): BelongsTo
    {
        return $this->belongsTo(User::class, 'supervisor_id');
    }
    
    public function evaluations()
    {
        return $this->hasMany(Evaluation::class);
    }
}
