<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use \Faker\Factory;

class SimpleSeeder extends Seeder
{
    public function run()
    {
      $faker = Factory::create();
      for ($i=0; $i <200 ; $i++) { 
        $rand = rand(1000, 9999);
        $data = [
            'first_name' => $faker->firstName,
            'last_name' => $faker->lastName,
            'email'    => $faker->email,
            'is_active'    => $faker->boolean,
            'created_at' => date('Y-m-d H:i:s'),
        ];

        // Simple Queries
        //$this->db->query('INSERT INTO users (username, email) VALUES(:username:, :email:)', $data);

        // Using Query Builder
        $this->db->table('users')->insert($data); 
      }  
        
    }
}