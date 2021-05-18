<?php

namespace Tests\Unit;

use Tests\TestCase;
use Session;
use App\User;
use Auth;
use Illuminate\Http\Request;

class userTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

public function testRegister(){
        $data=['name'=>'Farishta Kabir','address'=>'Katalgonj, Chittagong','phone'=>'1784567865','email'=>'farishta.kabir@gmail.com','nid'=>'732567234','user_Type'=>'0','email_verified_at'=>'NULL','password'=>'12345678' ];
        $response=$this->json('POST', '/register',$data);
       
        $this->assertDatabaseHas('users', [
            'name'=>'Farishta Kabir']
        );
        $this->assertDatabaseHas('users', [
            'address'=>'Katalgonj, Chittagong']
        );
        $this->assertDatabaseHas('users', [
            'phone'=>'1784567865']
        );
        $this->assertDatabaseHas('users', [
            'email'=>'farishta.kabir@gmail.com']
        );
    }



public function testLogin(){
    $data=['email'=>'farishta.kabir@gmail.com','password'=>'12345678' ];
    $response=$this->json('POST', '/login',$data);
    $this->assertEquals($data['email'],Auth::user()->email);
}








}