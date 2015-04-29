<?php

/**
 * Created by PhpStorm.
 * User: Ramos
 * Date: 28/04/2015
 * Time: 11:58
 */
class PostControllerTest extends TestCase
{

    public function testeAll()
    {
        Post::shouldReceive('all')->once()->andReturn('foo');
        $response = $this->call('GET', 'posts');
//        $this->assertTrue($response->isOk());
//        $this->assertTrue(!! $response->original->posts);
        $this->assertRequestOk();
        $this->assertViewReceives('posts','foo');
    }

    public  function testStore(){
        Post::shouldReceive('store')->once()->andReturn('foo');
        $this->call('POST','posts');
        $this->assertRedirectedTo('posts');
    }
    public function testShow()
    {
////        $response = $this->call('GET', 'posts/1');
////        $this->assertTrue($response->isOk());
        Post::shouldReceive('all')->once()->andReturn('foo');
        $this->call('GET','posts');
        $this->assertViewReceives('posts','foo');
    }
    public function testStoreFails()
    {
        Post::shouldReceive('store')->once()->andReturn(false);
        $this->call('POST','posts');
        $this->assertRedirectedTo('posts/create');
    }
//
//    public function testCreate()
//    {
//        $response = $this->call('GET', 'posts/create');
//        $this->assertTrue($response->isOk());
//    }
//
//    public function testeEdit()
//    {
//        $response = $this->call('GET', 'posts/1/edit');
//        $this->assertTrue($response->isOk());
//    }
}