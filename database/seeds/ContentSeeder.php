<?php

use Illuminate\Database\Seeder;
use App\Content;

class ContentSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        include 'content.php';
        for ($i=0; $i < count($contentblocks); $i++) {
          Content::create($contentblocks[$i]);
        }
    }
}
