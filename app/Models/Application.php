<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $fillable = [
        'application_id',
        'full_name',
        'date_of_birth',
        'cnic',
        'gender',
        'religion',
        'nationality',
        'address',
        'phone',
        'email',
        'father_name',
        'father_cnic',
        'father_occupation',
        'father_phone',
        'mother_name',
        'mother_occupation',
        'previous_school',
        'board',
        'grade',
        'marks_obtained',
        'total_marks',
        'percentage',
        'program_id',
        'photo_path',
        'cnic_copy_path',
        'marksheet_path',
        'other_docs_path',
        'status',
        'remarks',
        'submitted_at',
    ];

    protected $casts = [
        'date_of_birth' => 'date',
        'marks_obtained' => 'decimal:2',
        'total_marks' => 'decimal:2',
        'percentage' => 'decimal:2',
        'submitted_at' => 'datetime',
    ];

    public function program()
    {
        return $this->belongsTo(Program::class);
    }

    public function student()
    {
        return $this->hasOne(Student::class);
    }

    public function fees()
    {
        return $this->hasMany(Fee::class);
    }

    public function scopeByStatus($query, $status)
    {
        return $query->where('status', $status);
    }

    public function scopePending($query)
    {
        return $query->where('status', 'pending');
    }

    public function scopeApproved($query)
    {
        return $query->where('status', 'approved');
    }

    public function getFormattedCnicAttribute()
    {
        return substr($this->cnic, 0, 5) . '-' . substr($this->cnic, 5, 7) . '-' . substr($this->cnic, 12, 1);
    }

    public function getStatusBadgeAttribute()
    {
        return match($this->status) {
            'pending' => 'warning',
            'under_review' => 'info',
            'approved' => 'success',
            'rejected' => 'danger',
            'interview_scheduled' => 'primary',
            default => 'secondary'
        };
    }

    public function getStatusIconAttribute()
    {
        return match($this->status) {
            'pending' => 'clock',
            'under_review' => 'search',
            'approved' => 'check',
            'rejected' => 'times',
            'interview_scheduled' => 'calendar',
            default => 'question'
        };
    }

    public static function generateApplicationId()
    {
        $year = date('Y');
        $lastApplication = self::where('application_id', 'like', "FGC{$year}%")
            ->orderBy('id', 'desc')
            ->first();

        if ($lastApplication) {
            $lastNumber = (int) substr($lastApplication->application_id, -4);
            $newNumber = $lastNumber + 1;
        } else {
            $newNumber = 1;
        }

        return "FGC{$year}" . str_pad($newNumber, 4, '0', STR_PAD_LEFT);
    }
}
