<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'application_id',
        'roll_number',
        'enrollment_date',
        'class',
        'section',
        'status',
    ];

    protected $casts = [
        'enrollment_date' => 'date',
    ];

    public function application()
    {
        return $this->belongsTo(Application::class);
    }

    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }

    public function scopeByClass($query, $class)
    {
        return $query->where('class', $class);
    }
}
