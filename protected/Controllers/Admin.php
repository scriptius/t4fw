<?php

namespace App\Controllers;

use T4\Mvc\Controller;
use App\Models\User;
use App\Models\Post;
class Admin
    extends Controller
{

    public function actionRegistration()
    {

        var_dump($this->app->request->post);
//        die;
        $user = new User();
        $user ->fill($this->app->request->post);
        $user->save();
        var_dump($user->id);

    }

    public function actionPostAdd()
    {

        var_dump($this->app->request->post);
//        die;
        $post = new Post();
        $post ->fill($this->app->request->post);
        $post->save();


    }
}