<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%Registration}}`.
 */
class m190430_150406_create_Registration_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%Registration}}', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%Registration}}');
    }
}
