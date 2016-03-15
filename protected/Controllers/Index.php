<?php

namespace App\Controllers;

use T4\Mvc\Controller;
use App\Models\User;
use App\Models\Post;
class Index
    extends Controller
{

    public function actionDefault()
    {

//        try {
//            $user = new User();
//        } catch (Exception $ex) {
//            echo '123';
//        }
$user1 = User::findByColumn('nick', 'scriptius');
$user2 = User::findByColumn('nick', 'xxx');

        
//$user = new User(['firstName' => 'Viktor',
//            'lastName' => 'Mamonov',
//            'nick' => 'scriptius',
//            'email' => 'test@local.com',
//            'pass' => 'nfv;oiqnf;ovin',
//            'dateRegister' => '2016-03-14 22:17:00']);
// $user1->addFriend($user2);
//var_dump($user);

    }

}

