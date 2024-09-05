<?php

namespace App\Http\Controllers;

use App\Http\Requests\Submissions\StoreRequest;
use App\Services\SubmissionService;

class SubmissionController extends Controller
{

    public function __construct(public SubmissionService $submissionService)
    {
    }

    public function store(StoreRequest $request)
    {
        try {
            $this->submissionService->storeUsingJob($request->validated());

            return response()->json(['message' => 'Submission will be created soon.'], 202);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Submission creation failed'], 500);
        }
    }
}
