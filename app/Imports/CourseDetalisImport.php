<?php

namespace App\Imports;

use App\Models\Coursedetalis;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CourseDetalisImport implements ToModel , WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Coursedetalis([
            'subject_name' => $row['subject_name'],
            'subject_code' => $row['subject_code'],
            'subject_credit'=>$row['subject_credit'],
        ]);
    }
}
