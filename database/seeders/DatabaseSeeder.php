<?php

namespace Database\Seeders;

use App\Models\Task;
use App\Models\User;
use App\Models\Tag;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        /*
        User::factory()->create([
            'first_name' => 'Nombre',
            'last_name'=>'Apellido',
            'email' => 'test@example.com',
        ]);
        */
        User::factory(20)->create();

        $this->call(TaskSeeder::class);
        $this->call(TagSeeder::class);

    }
}
