<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class NoteTest extends TestCase
{

    public function test_add_note_successfully()
    {
        $response = $this->json('POST', 'api/v1/notes', [
            'job_id' => 1,
            'subject' => 'Test subject',
            'description' => 'Test note description'
        ]);

        $response->assertStatus(200);
    }

    public function test_update_note_successfully()
    {
        $response = $this->json('PUT', 'api/v1/notes/1', [
            'job_id' => 2,
            'subject' => 'Test subject 2',
            'description' => 'Test note description 2'
        ]);

        $response->assertStatus(200);
    }
}
