<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'uuid',
        'name',
        'legal_name',
        'registration_number',
        'tax_number',
        'phone',
        'email',
        'website',
        'address',
        'city',
        'country',
        'currency',
        'timezone',
        'logo_path',
        'status'
    ];

    public function branches()
    {
        return $this->hasMany(Branch::class);
    }
}
