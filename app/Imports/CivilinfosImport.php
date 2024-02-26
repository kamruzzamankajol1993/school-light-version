<?php

namespace App\Imports;

use App\Civilinfo;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class CivilinfosImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Civilinfo([
            'division'     => $row['division'],
            'district'    => $row['district'],
            'thana'     => $row['thana'],
            'suboffice'    => $row['suboffice'],
            'postcode'     => $row['postcode'],
            'division_bn'     => $row['division_bn'],
            'district_bn'    => $row['district_bn'],
            'thana_bn'     => $row['thana_bn'],
            'suboffice_bn'    => $row['suboffice_bn'],
            'postcode_bn'     => $row['postcode_bn'],


        ]);
    }
}
