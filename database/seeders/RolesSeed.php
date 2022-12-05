<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RolesSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::all();
        $permissions = [
            'ADMIN'     => ['ALL'],
            'CANDIDATE' => [''],
            'VOTER'     => [''],
        ];

        if ($role->count() === 0) {
            foreach($permissions as $key => $value){
                $role = new Role;
                $role->name = $key;
                $role->permissions = json_encode($value);
                $role->save();
            }
        }
    }
}
