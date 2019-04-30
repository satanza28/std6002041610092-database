<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%PrivateOwner}}`.
 */
class m190430_150323_create_PrivateOwner_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%PrivateOwner}}', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%PrivateOwner}}');
    }
}
