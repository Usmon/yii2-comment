<?php

use yii\db\Migration;

/**
 * Class m181011_162750_comments
 */
class m181011_162750_comments extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('comments', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(),
            'content' => $this->text()->notNull(),
            'create_date'=>$this->dateTime()->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181011_162750_comments cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181011_162750_comments cannot be reverted.\n";

        return false;
    }
    */
}
