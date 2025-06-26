<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CharacterTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_add() {
        $this->post('api/character',[
            'id' => 1337,
            'MODEL' => "V1",
            'DESCRIPTION' => 'KILLING MACHINE',
            'UNIT' => 1,
            'PURPOSE' => 'KILL',
            'PRODUCTION' => "1999-01-01 00:00:00"
        ])->assertStatus(200);
    }
}
