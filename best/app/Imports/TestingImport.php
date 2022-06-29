<?php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class TestingImport implements WithMultipleSheets
{
    
    public function sheets(): array
    {
        //dd('123');
        return [
            0 => new FirstImport(),
            1 => new SecondImport(),
        ];
    }
}
