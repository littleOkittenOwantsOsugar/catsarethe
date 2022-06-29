<?php

namespace App\Imports;

use App\Models\Testing;
use App\Imports\TestingImport;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class FirstImport implements ToCollection
{
    public function collection(Collection $rows)
        {
            dd('1234');

            //$r=explode(" ", $row[1] )
            foreach ($rows as $row) 
            {
                $r=explode(" ", $row[1] );
                Testing::create([
                    'Name' => $row[0],
                    'Number of money' => $r[0],
                    'Number of payings' => $r[1],
                    'Number of good deals' => $row[2]
                ]);
            }
        }
}
