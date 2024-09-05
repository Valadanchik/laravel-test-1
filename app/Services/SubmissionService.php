<?php

namespace App\Services;

class SubmissionService
{

    public function storeUsingJob(array $data): void
    {
        // Dispatch StoreJob
        dispatch(new \App\Jobs\Submissions\StoreJob($data));
    }
}
