<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BoardAPITest extends TestCase
{
    /**
     * Tests endpoint for listing all boards
     *
     * @return void
     */
    public function testGetBoards()
    {
        $response = $this->getJson('/api/board');
    }

    /**
     * Tests endpoint for listing individual board
     *
     * @return void
     */
    public function testGetBoard()
    {
        $response = $this->getJson('/api/board/pac_man');
    }

    /**
     * Tests endpoint to create new board at next ID
     *
     * @return void
     */
    public function testPostBoard()
    {
        $response = $this->postJson('/api/board');
    }

    /**
     * Tests endpoint to create board at specific board_name
     *
     * @return void
     */
    public function testPutNewBoard()
    {
        $response = $this->putJson('/api/score/dig_dug');
    }

    /**
     * Tests endpoint to update board
     *
     * @return void
     */
    public function testPutUpdateBoard()
    {
        $response = $this->getJson('/api/score/pac-man');
    }
}
