<?php

use yii\db\Migration;

class m170408_211627_create_table_articles extends Migration
{
    public function up()
    {
        $this->createTable('table_articles', [
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
        ]);
    }

    public function down()
    {
        $this->dropTable('table_articles');
    }
}
