<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Civilinfo extends Model
{
    protected $fillable = [
        'division', 'district', 'thana', 'suboffice', 'postcode','division_bn', 'district_bn', 'thana_bn', 'suboffice_bn', 'postcode_bn',
    ];
}
