<?php
declare(strict_types=1);

namespace Tests\Feature;


use Illuminate\Http\Response;
use Tests\TestCase;


class PhraseControllerTest extends TestCase
{
    /* @test */
    public function testIndexIsOk()
    {
        $response = $this->get('/api/phrase');
        $response->assertStatus(Response::HTTP_OK);
        $response->assertJsonStructure(
            ['data' =>
                [
                    [
                        'id',
                        'phrase',
                        'author',
                        'created_at',
                        'updated_at'
                    ]
                ]
            ]
        );
    }

    /* @test */
    public function testShowIsOk()
    {
        $response = $this->get('/api/phrase/1', []);
        $response->assertStatus(Response::HTTP_OK);
        $response->assertJson(
            ['data' =>
                [
                    'id' => 1,
                    'phrase' => 'No temo las computadoras. Temo la falta de ellas.',
                    'author' => 'Isaac Asimov',
                    'created_at' => null,
                    'updated_at' => null
                ]
            ]
        );
    }

    /* @test */
    public function testRandomIsOk()
    {
        $response = $this->get('/api/random', []);
        $response->assertStatus(Response::HTTP_OK);
        $response->assertJsonStructure(
            ['data' =>
                [
                    'id',
                    'phrase',
                    'author',
                    'created_at',
                    'updated_at'
                ]
            ]
        );
    }
}
