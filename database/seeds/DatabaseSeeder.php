<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('secret'),
        ]);

        DB::table('dynamic_words')->insert([
            'heading_text' => 'SPECTRAL',
            'headline_text_1' => 'ANOTHER FINE RESPONSIVE',
            'headline_text_2' => 'SITE TEMPLATE FREEBIE',
            'headline_text_3' => 'CRAFTED BY HTML5 UP.',
            'button_text' => 'ACTIVATE',
            'action_text' => 'LEARN MORE',
        ]);
    }
}
