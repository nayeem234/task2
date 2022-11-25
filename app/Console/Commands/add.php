<?php

namespace App\Console\Commands;

use App\Models\Wallet;
use Illuminate\Console\Command;

class add extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'add:salary {amount} {id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $id = $this->argument('id');
        $amount = $this->argument('amount');
        $userData = Wallet::where('user_id', '=', $id)->get();
        $totalAmount = $userData[0]->salary_amount + $amount;
        $salary = Wallet::where('user_id', '=', $id);
        $salary->salary_amount = $totalAmount;
        $salary->update();
        echo "Update success";
    }
}
