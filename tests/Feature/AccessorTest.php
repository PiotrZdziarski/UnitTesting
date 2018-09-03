<?php

namespace Tests\Feature;

use App\Post;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AccessorTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testPostQuery()
    {
        $db_post = DB::select('select * from posts where id = 1');
        $db_post_title = ucfirst($db_post[0]->title);

        $model_post = Post::find(1);
        $model_post_title = $model_post->title;

        $this->assertEquals($db_post_title, $model_post_title);
    }

    public function testBasicTest()
    {
        $db_post = DB::select('select * from posts where id = 1');

        $db_post_title = ucfirst($db_post[0]->title);

        $response = $this->get('accessor/index?id=1');

        $response->assertStatus(200);
        $response->assertSeeText($db_post_title);
    }
}
