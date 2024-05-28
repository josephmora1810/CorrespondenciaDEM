<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Inbox;

class InboxSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Inbox::factory(20)->create();
    }
}
