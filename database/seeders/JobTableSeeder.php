<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\JobPost;

class JobTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        JobPost::truncate();

        JobPost::create([
            'job_title' => 'Senior Backend Engineer',
            'company_name' => 'Tuple Pte Ltd',
            'location' => 'Singapore',
            'type' => 'Permanent',
            'salary_range' => 'SGD 4000 - SGD 5000',
            'work_type' => 'On Site',
            'industry' => 'IT Engineers',
            'logo_url' => 'https://tailwindui.com/img/logos/48x48/tuple.svg',
        ]);
        JobPost::create([
            'job_title' => 'Backend Engineer',
            'company_name' => 'Tuple Pte Ltd',
            'location' => 'Singapore',
            'type' => 'Permanent',
            'salary_range' => 'SGD 2000 - SGD 3000',
            'work_type' => 'On Site',
            'industry' => 'IT Engineers',
            'logo_url' => 'https://tailwindui.com/img/logos/48x48/tuple.svg',
        ]);
        JobPost::create([
            'job_title' => 'Frontend Engineer',
            'company_name' => 'Savvy Pte Ltd',
            'location' => 'Singapore',
            'type' => 'Permanent',
            'salary_range' => 'SGD 2000 - SGD 3000',
            'work_type' => 'Remote',
            'industry' => 'IT Engineers',
            'logo_url' => 'https://tailwindui.com/img/logos/48x48/savvycal.svg',
        ]);
    }
}
