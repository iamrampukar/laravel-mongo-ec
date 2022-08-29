<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function userInfo() {
        return [
            'user_id'       => '123456y7uikj',
            'first_name'    => 'Lalit',
            'last_name'     => 'Narayan',
        ];
    }

    public function comments() {
        return array(
            array(
                "id" => 1,
                "comment"=> "Lorem 1 ipsum dolor sit amet, consectetur adipisicing elit",
            ),
            array(
                "id" => 2,
                "comment"=> "Lorem 2 ipsum dolor sit amet, consectetur adipisicing elit",
            ),
            array(
                "id" => 3,
                "comment"=> "Lorem 3 ipsum dolor sit amet, consectetur adipisicing elit",
            ),
            array(
                "id" => 4,
                "comment"=> "Lorem 4 ipsum dolor sit amet, consectetur adipisicing elit",
            ),
            array(
                "id" => 5,
                "comment"=> "Lorem 5 ipsum dolor sit amet, consectetur adipisicing elit",
            ),
        );
    }
}

