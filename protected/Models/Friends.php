<?php


namespace App\Models;

use T4\Orm\Model;

class Friends
    extends Model
{
    protected static $schema = [
        'table' => 'Friends',
        'columns' => [
            'userId' => ['type' => 'l'],
            'friendId' => ['type' => 'string'],
            'nick' => ['type' => 'string'],
            'email' => ['type' => 'string'],
            'pass' => ['type' => 'string'],
            'dateRegister' => ['type' => 'datetime'],
        ],
        'relations' => [
            'friendId' => ['type' => self::HAS_MANY, 'model' => User::class],
        ],
    ];
}