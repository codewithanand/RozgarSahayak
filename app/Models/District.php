<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\State;
use App\Models\PersonalInformation;


class District extends Model
{
    use HasFactory;

    public function state()
    {
        return $this->belongsTo(State::class, 'state_code', 'state_code');
    }

    public function personal_informations()
    {
        return $this->hasMany(PersonalInformation::class, 'district_code', 'district_code');
    }
}
