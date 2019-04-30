<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%Viewing}}`.
 */
class m190430_150341_create_Viewing_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%Viewing}}', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%Viewing}}');
    }
}
