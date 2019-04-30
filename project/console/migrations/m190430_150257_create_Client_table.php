<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%Client}}`.
 */
class m190430_150257_create_Client_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%Client}}', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%Client}}');
    }
}
