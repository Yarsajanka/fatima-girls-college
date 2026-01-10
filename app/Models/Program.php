<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $fillable = [
        'name',
        'code',
        'description',
        'duration_years',
        'capacity',
        'eligibility_criteria',
        'fee_per_year',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'fee_per_year' => 'decimal:2',
    ];

    public function applications()
    {
        return $this->hasMany(Application::class);
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function getFormattedFeeAttribute()
    {
        return 'Rs. ' . number_format($this->fee_per_year, 0);
    }
}
