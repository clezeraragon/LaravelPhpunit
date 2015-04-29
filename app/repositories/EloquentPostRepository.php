<?php

/**
 * Created by PhpStorm.
 * User: Ramos
 * Date: 28/04/2015
 * Time: 14:20
 */
class EloquentPostRepository implements PostRepositoryInterFace
{

    public function all()
    {
//        var_dump("clezseraerwerwer");
        return Post::all();
    }

    public function store()
    {

    }

    public function show()
    {
      var_dump("teste");
    }
}