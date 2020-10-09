<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ScoreApiTest extends TestCase
{
    /**
     * Tests scores endpoint
     *
     * @return void
     */
    public function testScores()
    {
        $response = $this->getJson('/api/score');

        $response->assertStatus(200);
        $response->assertJsonStructure([
            '*' => [
                'id',
                'score',
                'created_at',
                'updated_at'
              ]
        ]);
    }
}
