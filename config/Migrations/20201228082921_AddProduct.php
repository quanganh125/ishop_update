<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class AddProduct extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function up()
    {
        $this->table('products')
        ->addColumn('name', 'string', [
            'default' => null,
            'limit' => 50,
            'null' => false,
        ])
        ->addColumn('category', 'string', [
            'default' => null,
            'limit' => 30,
            'null' => false,
        ])
        ->addColumn('user_id', 'integer', [
            'default' => null,
            'limit' => null,
            'null' => false,
        ])
        ->addForeignKey('user_id', 'users', 'id', ['delete'=> 'CASCADE', 'update'=> 'CASCADE'])

        ->addColumn('description', 'text', [
            'default' => null,
            'limit' => null,
            'null' => false,
        ])
        ->addColumn('total', 'string', [
            'default' => '0',
            'limit' => 11,
            'null' => false,
        ])
        ->addColumn('cost', 'string', [
            'default' => '0',
            'limit' => 30,
            'null' => false,
        ])
        ->addColumn('image_link', 'string', [
            'default' => null,
            'limit' => 50,
            'null' => false,
        ])
        ->addColumn('modified', 'datetime', [
            'default' => null,
            'limit' => null,
            'null' => false,
        ])
        ->create();
    }
    public function down()
    {
        $this->table('products')->drop()->save();
    }
}
