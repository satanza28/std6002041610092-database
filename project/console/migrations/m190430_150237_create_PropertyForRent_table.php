<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%PropertyForRent}}`.
 */
class m190430_150237_create_PropertyForRent_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%PropertyForRent}}', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%PropertyForRent}}');
    }
}
