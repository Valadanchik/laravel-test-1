<?php

namespace App\Services;

class SubmissionService
{

    public function storeUsingJob(array $data): void
    {
        try {
            dispatch(new \App\Jobs\Submissions\StoreJob($data));
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }
    }
}
