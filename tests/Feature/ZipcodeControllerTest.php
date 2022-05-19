<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ZipcodeControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->json('GET', '/api/zipcodes/01210');

        $response->assertStatus(200)
            ->assertJson([
                'zipcode' => '01210',
                'locality' => 'CIUDAD DE MEXICO',
                'federal_entity' => [
                    'key' => 9,
                    'name' => 'CIUDAD DE MEXICO',
                    'code' => null
                ],
                'settlements' => [
                    [
                        'key' => 82,
                        'name' => 'SANTA FE',
                        'zone_type' => 'URBANO',
                        'seetlement_type' => [
                            'name' => 'Pueblo'
                        ]
                    ]
                ],
                'municipality' => [
                    'key' => 10,
                    'name' => 'ALVARO OBREGON'
                ]

            ]);

        $response->assertStatus(200);
    }
}
