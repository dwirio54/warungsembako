<?php

use App\User;
use App\Permission;
Use App\Role;
use Illuminate\Database\Seeder;

class AclSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()['cache']->forget('spatie.permission.cache');

        $permissions = Permission::defaultPermissions();
        foreach ($permissions as $perms) {
            Permission::firstOrCreate(['name' => $perms]);
        }
        $this->command->info('Default Permission Added.');

        $roles = Role::defaultRoles();
        foreach ($roles as $role) {
            $role = Role::firstOrCreate(['name' => $role]);
        }
        if ($role->name == 'Petugas') {
            $role->givePermissionTo(Permission::all());
        }
        $this->command->info('Default Roles added.');
        }
    }
