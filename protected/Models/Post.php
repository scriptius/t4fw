<?php

namespace App\Models;


use T4\Orm\Model;

class Post extends Model {

    protected static $schema = [
        'table' => 'Posts',
        'columns' => [
            'title' => ['type' => 'string'],
            'text' => ['type' => 'string'],
            'likes' => ['type' => 'integer'],
            'image' => ['type' => 'string'],
            'dateRegister' => ['type' => 'datetime'],
        ]
    ];

    public function __construct(array $post = null) {


    }
}