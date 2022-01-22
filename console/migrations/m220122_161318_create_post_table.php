<?php

use yii\db\Migration;

class m220122_161318_create_post_table extends Migration
{
    public function safeUp()
    {
        $this->createTable('{{%post}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'content' => $this->text(),
            'updated_at' => $this->integer(),
            'created_at' => $this->integer()->notNull(),
        ], Yii::$app->params['tableOptions']);
    }

    public function safeDown()
    {
        $this->dropTable('{{%post}}');
    }
}
