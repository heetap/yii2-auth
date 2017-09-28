<?php
/**
 *
 * @author Ricardo Obregón <ricardo@obregon.co>
 * @created 25/08/14 07:26 PM
 */

use yii\db\Schema;

class m000000_000004_CreateAuthTable extends \yii\db\Migration
{
	public function safeUp()
	{
        $this->createTable('auth', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'source' => $this->string()->notNull(),
            'source_id' => $this->string()->notNull(),
        ]);
	}

	public function safeDown()
	{
        $this->dropTable('auth');
	}
} 