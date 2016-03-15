<?php

namespace App\Models;

use T4\Orm\Model;

class User extends Model {

    protected static $schema = [
        'table' => 'Users',
        'columns' => [
            'firstName' => ['type' => 'string'],
            'lastName' => ['type' => 'string'],
            'nick' => ['type' => 'string'],
            'email' => ['type' => 'string'],
            'pass' => ['type' => 'string'],
            'dateRegister' => ['type' => 'datetime'],
        ],
        'relations' => [
            '__id' => ['type' => self::HAS_MANY, 'model' => Friends::class],
                    ],
    ];

    public function __construct() {


    }

    public function addFriend(User $user) {

        if ($this->__id == $user['__id']) throw new \T4\Orm\Exception('Вы не можете дабавить в друзья самого себя');
        $dbh = $this->getDbConnection();
        $query = 'INSERT INTO `Friends`(`userId`, `friendId`) VALUES (:userId , :friendId)';
        $params['userId'] = $this->__id;
        $params['friendId'] = $user['__id'];
        $dbh->execute($query, $params);
      
    }

    public function addPost(Post $post) {
//        if ($this->__id == $user['__id']) throw new \T4\Orm\Exception('Вы не можете дабавить в друзья самого себя');
        $dbh = $this->getDbConnection();
        $query = 'INSERT INTO `PostsInUser`(`userId`, `postId`) VALUES (:userId , :postId)';
        $params['userId'] = $this->__id;
        $params['postId'] = $post['__id'];
        $dbh->execute($query, $params);

    }




}
