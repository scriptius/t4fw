<?php

namespace App\Migrations;

use T4\Orm\Migration;

class m_0000000001_CreateWebApp extends Migration {

    public function up() {

        if (!$this->existsTable('Users')) {
            $this->createTable('Users', [
                'firstName' => ['type' => 'string', 'length' => 100],
                'lastName' => ['type' => 'string', 'length' => 100],
                'nick' => ['type' => 'string', 'length' => 50],
                'email' => ['type' => 'string'],
                'pass' => ['type' => 'string'],
                'dateRegister' => ['type' => 'date'],
                    ], [
                ['columns' => ['firstName']],
                ['columns' => ['lastName']],
                ['columns' => ['nick']]
                    ]
            );
        }
        if (!$this->existsTable('Posts')) {
            $this->createTable('Posts', [
                'title' => ['type' => 'string'],
                'text' => ['type' => 'text'],
                'likes' => ['type' => 'integer'],
                'image' => ['type' => 'string'],
                'dateRegister' => ['type' => 'date'],
                    ], [
                ['columns' => ['title']],
                ['columns' => ['dateRegister']],
                    ]
            );
        }

        if (!$this->existsTable('Friends')) {
            $this->createTable('Friends', [
                'userId' => ['type' => 'link'],
                'friendId' => ['type' => 'link'],
                    ], [
                ['columns' => ['userId']],
                ['columns' => ['friendId']],
                    ]
            );
        }
        if (!$this->existsTable('PostsInUser')) {
            $this->createTable('PostsInUser', [
                'userId' => ['type' => 'link'],
                'friendId' => ['type' => 'link'],
                    ], [
                ['columns' => ['userId']],
                ['columns' => ['friendId']],
                    ]
            );
        }
    }

    public function down() {
        $this->dropTable('Users');
        $this->dropTable('Friends');
        $this->dropTable('Posts');
        $this->dropTable('PostsInUser');
    }

}
