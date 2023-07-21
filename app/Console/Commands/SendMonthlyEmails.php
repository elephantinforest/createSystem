<?php

namespace App\Console\Commands;


use Illuminate\Support\Facades\Mail;
use Illuminate\Console\Command;
use App\Mail\MonthlyEmail;
use App\Models\Register;
use App\Models\User;
use Carbon\Carbon;

class SendMonthlyEmails extends Command
{
   protected $signature = 'emails:send-monthly';

    protected $description = 'Send monthly emails';

    public function handle()
    {

 // 現在の日付を取得
        $currentDate = Carbon::now()->format('d');


        // データベースから日付が$currentDateから2日前のレコードを取

        // データベースから日付が現在の日付と一致するレコードを取得
        $users = User::leftJoin('registers', 'users.id', '=', 'registers.user_id')
    ->select('users.*', 'registers.*')->where('registers.Monthly_payment_date', $currentDate)->get();

    // メールを送信
        foreach ($users as $user) {



            Mail::to($user->email)->send(new MonthlyEmail($user));
        }
    }
}
