<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected $fillable = [
        'job_name',
        'division'
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
