<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'birth_date',
        'gender_type_id',
        'zip_code',
        'city',
        'address',
    ];

    protected $appends = [
        'gender'
    ];

    public const genderTypes = [
        1 => 'male',
        2 => 'female',
        3 => 'other'
    ];

    public function getGenderAttribute(): string {
        return self::genderTypes[$this->gender_type_id];
    }
}
