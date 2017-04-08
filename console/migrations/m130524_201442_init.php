<?php

use yii\db\Migration;

class m130524_201442_init extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('articles', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'text' => $this->string(5000)->notNull(),
            'author' => $this->integer()->notNull(),
            'alias' => $this->string()->unique(),
            'date' => $this->date()->notNull()->unique(),

            'category' => $this->string(),
            'is_published' => $this->boolean()->notNull(),
            'likes' => $this->integer()->notNull(),
            'hits' => $this->integer()->notNull(),
            'intro_picture' => $this->string(),
            'main_picture' => $this->string()
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%user}}');
    }
}
