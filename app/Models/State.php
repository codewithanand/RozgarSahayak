<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\District;
use App\Models\PersonalInformation;


class State extends Model
{
    use HasFactory;

    public function districts()
    {
        return $this->hasMany(District::class, 'state_code', 'state_code');
    }

    public function personal_informations()
    {
        return $this->hasMany(PersonalInformation::class, 'state_code', 'state_code');
    }
}
