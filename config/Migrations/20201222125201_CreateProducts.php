<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateProducts extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('products');

        $table->addColumn('name', 'string', [
            'default' => null,
            'limit' => 50,
            'null' => false,
        ]);
        $table->addColumn('category', 'string', [
            'default' => null,
            'limit' => 30,
            'null' => false,
        ]);
        $table->addColumn('user_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('description', 'text', [
            'default' => null,
            'limit' => 500,
            'null' => false,
        ]);
        $table->addColumn('total', 'string', [
            'default' => '0',
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('cost', 'string', [
            'default' => '0',
            'limit' => 30,
            'null' => false,
        ]);
        $table->addColumn('image_link', 'string', [
            'default' => 'NULL',
            'limit' => 50,
            'null' => false,
        ]);
        $table->addColumn('modified', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->create();
    }
}
