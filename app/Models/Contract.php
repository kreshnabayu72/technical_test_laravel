<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    use HasFactory;

    protected $fillable = [
        'contract_detail',
        'employee_id',
        'expired_at',
    ];

    public function employee()
    {
        return $this->hasOne(Employee::class);
    }
}
