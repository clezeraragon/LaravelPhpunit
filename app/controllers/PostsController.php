<?php

class PostsController extends \BaseController
{

    function __construct(PostRepositoryInterFace $posts)
    {
        $this->posts = $posts;
    }

    public function index()
    {
        $posts = $this->posts->all();
        return View::make('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     * GET /posts/create
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     * POST /posts
     *
     * @return Response
     */
    public function store()
    {
        $wasSaved = $this->posts->store(Input::all());
        return $wasSaved
            ? Redirect::route('posts.index')
            : Redirect::route('posts.create');
    }

    /**
     * Display the specified resource.
     * GET /posts/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        $wasSaved = $this->posts->show($id);
        return View::make('posts.show', compact('wasSaved'));
    }

    /**
     * Show the form for editing the specified resource.
     * GET /posts/{id}/edit
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * PUT /posts/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * DELETE /posts/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}