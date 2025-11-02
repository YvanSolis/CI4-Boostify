<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsersSeeder extends Seeder
{
    public function run()
    {
        $now = date('Y-m-d H:i:s');
        // if you want password that is hashed
        $password = password_hash('Password123!', PASSWORD_DEFAULT);

        // no need to add id since its auto increment
        $users = [
            [
                'first_name' => 'Yvan',
                'last_name' => 'Solis',
                'email' => 'ypaz1205@gmail.com',
                'password_hash' => $password,
                'type' => 'employee',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'first_name' => 'Kirk',
                'last_name' => 'Endozo',
                'email' => 'kco10@gmail.com',
                'password_hash' => $password,
                'type' => 'client',
                'created_at' => $now,
                'updated_at' => $now,
            ]
        ];

        $this->db->table('users')->insertBatch($users);
    }
}
