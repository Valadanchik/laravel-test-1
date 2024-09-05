<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Queue;
use Tests\TestCase;
use App\Jobs\Submissions\StoreJob;

class SubmissionTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test the creation of a new submission and job dispatch.
     *
     * @return void
     */
    public function test_create_submission_and_dispatch_job()
    {
        // Fake the queue to test job dispatching
        Queue::fake();

        // Prepare the data for the request
        $data = [
            'name' => 'John Doe',
            'email' => 'test@example.com',
            'message' => 'Hello World',
        ];

        // Send a POST request to the /api/submissions endpoint
        $response = $this->postJson('/api/submissions', $data);

        // Assert that the response has a 202 status code
        $response->assertStatus(202);
        $response->assertJson(['message' => 'Submission will be created soon.']);

        // Assert that the job was dispatched
        Queue::assertPushed(StoreJob::class, function ($job) use ($data) {
            return $job->data === $data;
        });
    }
}
