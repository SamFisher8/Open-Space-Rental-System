<?php

namespace Tests\Unit;

use Tests\TestCase;
use Session;
use App\User;
use Auth;
use Illuminate\Http\Request;

class routeTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_registerRoute()
    {
        $response=$this->get('/browselist');
        $response->assertStatus(200);
    }
    public function test_registerCreatepost()
    {
        $response=$this->get('/createPost');
        $response->assertStatus(200);
    }
    public function test_registerHome()
    {
        $response=$this->get('/home');
        $response->assertStatus(302);
    }
}


