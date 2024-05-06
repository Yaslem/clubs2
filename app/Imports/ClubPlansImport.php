<?php

namespace App\Imports;

use App\Models\ClubPlans;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\ToModel;

class ClubPlansImport implements ToModel
{
    public $club_id;
    public $year_id;
    public $status;

    public function __construct($club_id, $year_id, $status){
        $this->club_id = $club_id;
        $this->year_id = $year_id;
        $this->status = $status;
    }
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new ClubPlans([
            'title'     => $row[0],
            'date'    => Carbon::instance(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[1])),
            'location_id' => $row[2],
            'presenter' => $row[3],
            'club_id' => $this->club_id,
            'year_id' => $this->year_id,
            'status' => $this->status,
        ]);
    }
}
