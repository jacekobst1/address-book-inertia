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

    public const genderTypes = [
        1 => 'male',
        2 => 'female',
        3 => 'other'
    ];

    public function getGenderType(): string {
        return self::genderTypes[$this->gender_type_id];
    }
}
