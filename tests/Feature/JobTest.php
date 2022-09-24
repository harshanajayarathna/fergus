<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

use App\Models\Status;
use App\Models\Client;
use App\Models\Job;


class JobTest extends TestCase
{
    public function test_get_all_jobs_successfully()
    {
        $response = $this->json('GET', 'api/v1/jobs');
        $response->assertStatus(200);
    }

    public function test_update_job_successfully()
    {
        $data = [
            'number' => rand(3, 6),
            'status_id' => Status::find(1)->id,
            'client_id' =>  Client::find(1)->id,
            'description' => 'This is test description',
        ];

        $response = $this->json('PUT', 'api/v1/jobs/1', $data);

        $response->assertStatus(200);
    }


    public function test_get_job_by_id()
    {
        $response = $this->json('GET', 'api/v1/jobs/1');
        $response->assertStatus(200);
    }
}
