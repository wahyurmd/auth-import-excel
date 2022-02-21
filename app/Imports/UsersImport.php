<?php

namespace App\Imports;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;

class UsersImport implements ToModel {
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

    public function model( array $row ) {
        return new User( [
            'id' => $row[ 0 ],
            'name' => $row[ 1 ],
            'username' => $row[ 2 ],
            'password' => Hash::make( $row[ 3 ] ),
            'role' => $row[ 4 ],
        ] );
    }
}