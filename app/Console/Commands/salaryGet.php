<?php

namespace App\Console\Commands;

use App\Models\Wallet;
use Illuminate\Console\Command;

class salaryGet extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'rexoit:salary {id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get user salary';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
       $id = $this->argument('id');
       $userData = Wallet::where('user_id','=',$id)->get();
       echo "Your Salary :". $userData[0]->salary_amount;
    }
}
