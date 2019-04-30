<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%branch}}`.
 */
class m190430_141823_create_branch_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%branch}}', [
            'id' => $this->primaryKey(),
            'name_branch'=>$this ->string(200)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%branch}}');
    }
}
