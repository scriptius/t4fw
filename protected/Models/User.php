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
            'dateRegister' => ['type' => 'date'],
        ]
    ];

    public function __construct(array $user = null) {
//        if (null == $user) trow new \T4\Orm\Exception('Вы не ввели данныеля пользователя', 7 $previous)
        $this->fill($user);
        $this->save();
    }

    public function addFriend(User $user) {
//        var_dump($user['nick']);
//        die;
        if ($this->nick == $user['nick']) return false;
        $dbh = $this->getDbConnection();
        $query = 'INSERT INTO `Friends`(`userId`, `friendId`) VALUES (:userId , :friendId)';
        $params['userId'] = $this->nick;
        $params['friendId'] = $user['nick'];
        $dbh->execute($query, $params);
      
    }

}
