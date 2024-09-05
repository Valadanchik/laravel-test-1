<?php

namespace App\Jobs\Submissions;

use App\Events\SubmissionSaved;
use App\Models\Submission;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class StoreJob implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct(public array $data)
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        // Save submission to database
        try {
            Submission::create($this->data);
        } catch (\Exception $e) {
            info($e->getMessage());
        }

        // Dispatch event
        SubmissionSaved::dispatch($this->data['name'], $this->data['email']);
    }
}
