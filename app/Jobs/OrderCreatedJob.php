<?php

namespace App\Jobs;

use App\Listeners\OrderCreatedEmailListener;
use App\Models\Order;
use App\Notifications\OrderCreatedEmailNotification;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class OrderCreatedJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(protected Order $order)
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        logs()->info('Job has been started');
        $this->order->notify(new OrderCreatedEmailNotification);
//        $this->order->notify(new OrderCreatedEmailListener);
        logs()->info('Job has been completed');
    }
}
