<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;

class AccessorController extends Controller
{
    /**
     * @var Post
     */
    private $post;


    /**
     * Dependency injection here lol
     * @param Post $post
     */
    public function __construct(Post $post)
    {
        return $this->post = $post;
    }

    /**
     *
     * @param Request $request
     * @return mixed
     */
    public function index(Request $request)
    {
        $post_id = $request->get('id', 1);

        $post = $this->post->find($post_id);

        return $post->title;
    }
}
