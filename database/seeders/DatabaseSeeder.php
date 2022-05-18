<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $user = \App\Models\User::create([
            'name' => 'Super Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password')
        ]);

        \App\Models\Job::create([
            'user_id' => $user->id,
            'title' => 'Laravel Senior Developer',
            'location' => 'lagos',
            'tags' => 'laravel, Javascript',
            'job_type' => 'fulltime',
            'job_description' => 'Lorem ipsum dolor sit amet consectetur
                                  adipisicing elit tempora adipisci impedit.',
            'company_name' => 'Von Ltd',
            'company_description' => 'tax consultant for govt',
            'email' => 'von@ltd.com',
            'website' => 'https://www.von.com',
            'facebook' => 'https://www.facebook.com/von',
            'twitter' => 'https://www.twitter.com/von',
            'linkedin' => 'https://www.linkedin.com/von'
        ]);

        \App\Models\Job::create([
            'user_id' => $user->id,
            'title' => 'Full Stack Developer',
            'location' => 'Ikeja',
            'tags' => 'laravel, Javascript, react',
            'job_type' => 'parttime',
            'job_description' => 'Lorem ipsum dolor sit amet consectetur
                                  adipisicing elit tempora adipisci impedit.',
            'company_name' => 'Von Ltd',
            'company_description' => 'tax consultant for govt',
            'email' => 'von@ltd.com',
            'website' => 'https://www.adv.com',
            'facebook' => 'https://www.facebook.com/adv',
            'twitter' => 'https://www.twitter.com/adv',
            'linkedin' => 'https://www.linkedin.com/adv'
        ]);

        \App\Models\Job::create([
            'user_id' => $user->id,
            'title' => 'Software Engineer',
            'location' => 'Lekki',
            'tags' => 'Node, Javascript, Angular',
            'job_type' => 'Remote',
            'job_description' => 'Lorem ipsum dolor sit amet consectetur
                                  adipisicing elit tempora adipisci impedit.',
            'company_name' => 'Von Ltd',
            'company_description' => 'tax consultant for govt',
            'email' => 'von@ltd.com',
            'website' => 'https://www.onenet.com',
            'facebook' => 'https://www.facebook.com/onenet',
            'twitter' => 'https://www.twitter.com/onenet',
            'linkedin' => 'https://www.linkedin.com/onenet'
        ]);
    }
}
