<?php

namespace App\Imports;

use App\Civilinfoban;
use Maatwebsite\Excel\Concerns\ToModel;

class CivilinfobansImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Civilinfoban([
            //
        ]);
    }
}
