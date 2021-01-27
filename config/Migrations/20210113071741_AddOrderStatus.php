<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class AddOrderStatus extends AbstractMigration
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
        $this->table('statuses')
        ->addColumn('description', 'string', [
            'default' => null,
            'limit' => 50,
            'null' => false,
        ])
        ->create();
    }

    public function down()
    {
        $this->table('statuses')->drop()->save();
    }
}
