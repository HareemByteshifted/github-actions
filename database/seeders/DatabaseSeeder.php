<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Employer;
use App\Models\Job;
use App\Models\User;
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
        Job::factory()->count(50)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Employer::factory()->count(10)->hasJobs(5)->create();

        // Employer::factory()->count(10)->hasJobs(2)->create();

        Customer::factory()->count(10)->hasInvoices(10)->create();

        Customer::factory()->count(10)->hasInvoices(5)->create();

        Customer::factory()->count(5)->create();
    }
}
