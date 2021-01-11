<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class AddAvatarToUser extends AbstractMigration
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
        $table = $this->table('users');
        $table->addColumn('avatar', 'string', [
                    'default' => '/img/avatar/default.jfif',
                    'limit' => 255,
                    'null' => false,
                ])
                ->update();
    }
}
