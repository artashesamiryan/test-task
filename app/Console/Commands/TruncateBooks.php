<?php

namespace App\Console\Commands;

use App\Book;
use Illuminate\Console\Command;

class TruncateBooks extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'truncate:books';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Truncates books table';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        try{
            Book::truncate();
            return true;
        }catch(\Exception $e){
            return false;
        }

    }
}
