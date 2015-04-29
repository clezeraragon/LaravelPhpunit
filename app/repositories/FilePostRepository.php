<?php
/**
 * Created by PhpStorm.
 * User: Ramos
 * Date: 28/04/2015
 * Time: 14:31
 */

class FilePostRepository implements PostRepositoryInterFace {

    public function all()
    {
        var_dump("este é um teste");
        return "todos na lista";
    }

}