<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PlayerAPITest extends TestCase
{
    /**
     * Tests endpoint for listing all players
     *
     * @return void
     */
    public function testGetPlayers()
    {
        $response = $this->getJson('/api/player');
    }

    /**
     * Tests endpoint for listing individual player
     *
     * @return void
     */
    public function testGetPlayer()
    {
        $response = $this->getJson('/api/score/sonic_hedgehog');
    }

    /**
     * Tests endpoint to create new player at next ID
     *
     * @return void
     */
    public function testPostPlayer()
    {
        $response = $this->postJson('/api/player');
    }

    /**
     * Tests endpoint to create new player at specific player_name
     *
     * @return void
     */
    public function testPutNewPlayer()
    {
        $response = $this->putJson('/api/score/super_mario');
    }

    /**
     * Tests endpoint to update player
     *
     * @return void
     */
    public function testPutUpdatePlayer()
    {
        $response = $this->getJson('/api/score/sonic_hedgehog');
    }
}
