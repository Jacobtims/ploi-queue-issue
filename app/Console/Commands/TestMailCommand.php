<?php

namespace App\Console\Commands;

use App\Notifications\TestNotification;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Notification;

class TestMailCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:test-mail';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        Notification::route('mail', 'test@email.test')
            ->notify(new TestNotification());

        $this->info('Mail send!');
    }
}
