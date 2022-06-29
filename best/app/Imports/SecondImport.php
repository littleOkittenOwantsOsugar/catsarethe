<?php

namespace App\Imports;

use App\Models\Testing2;
use App\Imports\TestingImport;
use Maatwebsite\Excel\Concerns\ToArray;

class SecondImport implements ToArray
{
    public function array(array $row)
        {
            Testing2::create([
                'Surname' => $row[0],
                'Description' => $row[1],
                'Deals' => $row[2]
            ]);
        }
}
