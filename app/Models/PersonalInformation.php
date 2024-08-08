<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\District;
use App\Models\State;

class PersonalInformation extends Model
{
    use HasFactory;

    public function state()
    {
        return $this->belongsTo(State::class, 'state_code', 'state_code');
    }

    public function district()
    {
        return $this->belongsTo(District::class, 'district_code', 'district_code');
    }
}
