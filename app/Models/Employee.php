<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Employee extends Model
{
    use HasFactory;
    protected $fillable = [
        'employee_name',
        'job_id',
    ];

    public function job()
    {
        return $this->hasOne(Job::class);
    }
}
