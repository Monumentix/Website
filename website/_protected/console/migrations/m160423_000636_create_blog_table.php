<?php

use yii\db\Migration;

class m160423_000636_create_blog_table extends Migration
{
    public function up()
    {
      $tableOptions = null;

      if ($this->db->driverName === 'mysql')
      {
          $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
      }

        $this->createTable('blog', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'title' => $this->string()->notNull(),
            'slug' => $this->string()->notNull(),
            'summary' => $this->text()->notNull(),
            'content' => $this->text()->notNull(),
            'tags' => $this->text()->notNull(),
            'status' => $this->integer()->notNull(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
            'FOREIGN KEY (user_id) REFERENCES {{%user}}(id)
                ON DELETE CASCADE ON UPDATE CASCADE',
        ], $tableOptions);

    }

    public function down()
    {
        $this->dropTable('blog');
    }
}
