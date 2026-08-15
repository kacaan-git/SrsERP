<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Branch extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'uuid',
        'company_id',
        'name',
        'code',
        'phone',
        'email',
        'address',
        'manager_id',
        'status'
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
