<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'username',
        'student_id',
        'grade',
        'branch',
        'level',
        'avatar',
        'activation_code',
        'is_admin'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'password' => 'hashed',
        'is_admin' => 'boolean',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($user) {
            if (empty($user->student_id)) {
                $lastStudent = static::orderByRaw('CAST(student_id AS INTEGER) DESC')->first();
                $nextId = $lastStudent && $lastStudent->student_id
                    ? ((int) $lastStudent->student_id) + 1
                    : 1;
                $user->student_id = str_pad($nextId, 5, '0', STR_PAD_LEFT);
            }
        });
    }

    /**
     * Get the formatted student ID (zero-padded to 5 digits).
     */
    public function getFormattedStudentIdAttribute(): string
    {
        return str_pad($this->student_id, 5, '0', STR_PAD_LEFT);
    }
}
