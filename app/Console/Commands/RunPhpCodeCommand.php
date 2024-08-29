<?php

namespace App\Console\Commands;

use App\LeetCode\Solution;
use Illuminate\Console\Command;

class RunPhpCodeCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:test-code';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This is a test command to run code';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $solution = new Solution();
        // $n = rand(0, 20);
        $n = 257;
        dump('This digit is '. $n);
        dump($solution->rotatedDigits($n));
    }
}
