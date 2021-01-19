<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class RenamingTable extends AbstractMigration
{
    /**
     * Migrate Up.
     */
    public function up()
    {
        $table = $this->table('statuses');
        $table->addColumn('description', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->create();
    }
    
    public function down()
    {
    }
}
