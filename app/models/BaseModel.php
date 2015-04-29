<?php

/**
 * Created by PhpStorm.
 * User: Ramos
 * Date: 28/04/2015
 * Time: 15:06
 */
class BaseModel extends Eloquent
{
    public static function shouldReceive()
    {
        $repo = get_called_class() . "RepositoryInterFace";
        $mock = Mockery::mock($repo);

        App::instance($repo, $mock);
        return call_user_func_array([$mock, "shouldReceive"], func_get_args());
    }
}