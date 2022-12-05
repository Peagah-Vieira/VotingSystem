<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        if ($role->count() === 0) {
            $role = new Role;
            $role->name = 'ADMIN';
            $role->permissions = json_encode(['ALL']);
            $role->save();
        }
    }
}
