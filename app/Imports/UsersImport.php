<?php

namespace App\Imports;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class UsersImport implements ToCollection
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function collection(Collection $rows)
    {
        foreach($rows as $row) {
            User::create([
                'staff_no' => $row[0],
                'name' => $row[1],
                'type' => 'staff',
                'email' => $row[5],
                'password' => Hash::make('Password1')
            ]);
        }
    }
}
