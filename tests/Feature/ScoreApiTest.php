<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ScoreApiTest extends TestCase
{
    use RefreshDatabase;
    
    /**
     * Tests endpoint for listing all scores
     *
     * @return void
     */
    public function testGetScores()
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

    /**
     * Tests endpoint for listing individual score
     *
     * @return void
     */
    public function testGetScore()
    {
        $response = $this->getJson('/api/score/1');
    }

    /**
     * Tests endpoint to create new score at next ID
     *
     * @return void
     */
    public function testPostScore()
    {
        $response = $this->postJson('/api/score');
    }

    /**
     * Tests endpoint to create new score at specific ID
     *
     * @return void
     */
    public function testPutNewScore()
    {
        $response = $this->putJson('/api/score/15');
    }

    /**
     * Tests endpoint to update score
     *
     * @return void
     */
    public function testPutUpdateScore()
    {
        $response = $this->getJson('/api/score/1');
    }
}
