<?php

use Illuminate\Database\Seeder;
use App\HowScenario;

class ReactionSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        include 'reaction.php';
        for ($i=0; $i < count($reactionblocks); $i++) {
            HowScenario::create($reactionblocks[$i]);
        }
    }
}

