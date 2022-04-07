<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Administrasi
        $petugas = factory(User::class)->create([
            'name'     => 'Ferdy',
            'email'    => 'ferdy@sembako.com',
            'address'  => 'jl. bebas asal enak',
            'phone'    => '81311465591',
            'password' => bcrypt('secret'),
        ]);

        $petugas->assignRole('admin');

        $this->command->info('>_ Here is your admin details to login:');
        $this->command->warn($petugas->email);
        $this->command->warn('Password is "secret"');

        // Customer
        $anggota = factory(User::class)->create([
            'name'     => 'Aditya',
            'email'    => 'aditya@sembako.com',
            'address'  => 'jl. sentosa timur utara',
            'phone'    => '89672650972',
            'password' => bcrypt('secret'),
        ]);

        $anggota->assignRole('customer');

        $this->command->info('>_ Here is your customer details to login:');
        $this->command->warn($anggota->email);
        $this->command->warn('Password is "secret"');

        // Director
        $anggota = factory(User::class)->create([
            'name'     => 'Dwirio',
            'email'    => 'dwirio@sembako.com',
            'address'  => 'jl. narogong km 16 deket rumah sakit thamrin',
            'phone'    => '81311465591',
            'password' => bcrypt('secret'),
        ]);

        $anggota->assignRole('direktur');

        $this->command->info('>_ Here is your direktur details to login:');
        $this->command->warn($anggota->email);
        $this->command->warn('Password is "secret"');

        $finance = factory(User::class)->create([
            'name'     => 'Dhava',
            'email'    => 'dhava@sembako.com',
            'address'  => 'jl. narogong km 16 deket rumah sakit thamrin',
            'phone'    => '81311465591',
            'password' => bcrypt('secret'),
        ]);

        $finance->assignRole('finance');

        $this->command->info('>_ Here is your finance details to login:');
        $this->command->warn($finance->email);
        $this->command->warn('Password is "secret"');

        // clear cache
        $this->command->call('cache:clear');

        // clear cache
        $this->command->call('cache:clear');
    }

}
