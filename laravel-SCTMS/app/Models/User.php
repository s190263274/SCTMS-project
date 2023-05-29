<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Task;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function mentorCoops()
    {
        return $this->hasMany(CoopTrainingProgram::class, 'mentor_id');
    }

    public function supervisorCoops()
    {
        return $this->hasMany(CoopTrainingProgram::class, 'supervisor_id');
    }

    public function tasks()
    {
        return $this->hasMany(Task::class, 'student_id');
    }

    public function tasksCompleted()
    {
        return !is_null($this->response1)
            && !is_null($this->response2)
            && !is_null($this->response3)
            && !is_null($this->response4)
            && !is_null($this->response5);
    }


    public function evaluations()
    {
        return $this->hasMany(Evaluation::class, 'supervisor_id');
    }
    
}
