<?php

namespace Tests\Unit;

use Tests\TestCase;
use Session;
use App\User;
use App\OpenSpace;

use Auth;
use Illuminate\Http\Request;

class openSpaceTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
public function test_openSpace(){

    $data=['name'=>'Pakshi Resort','address'=>'Pabna','price'=>'5000.00','size'=>'3000','user_id'=>'5','image'=>'20210327-DSC04147_1619799693.jpg'];
        $response=$this->json('POST', '/createPost',$data);

        $this->assertDatabaseHas('open_spaces', [
            'name'=>'Pakshi Resort']
        );

        $this->assertDatabaseHas('open_spaces', [
            'address'=>'Pabna']
        );
        $this->assertDatabaseHas('open_spaces', [
            'user_id'=>'5']
        );
        $this->assertDatabaseHas('open_spaces', [
            'price'=>'5000']
        );
}
}
