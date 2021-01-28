<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class AddOrder extends AbstractMigration
{
    /**
     * Up Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-up-method
     * @return void
     */
    public function up()
    {
        $this->table('orders')
            ->addColumn('product_id', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('customer_id', 'integer', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('status_id', 'integer', [
                'default' => '1',
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('quantity', 'integer', [
                'default' => 0,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('description', 'text', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addIndex(
                [
                    'customer_id',
                ]
            )
            ->addIndex(
                [
                    'status_id',
                ]
            )
            ->addIndex(
                [
                    'product_id',
                ]
            )
            ->create();

        $this->table('orders')
            ->addForeignKey(
                'customer_id',
                'users',
                'id',
                [
                    'update' => 'CASCADE',
                    'delete' => 'CASCADE',
                ]
            )
            ->addForeignKey(
                'status_id',
                'statuses',
                'id',
                [
                    'update' => 'CASCADE',
                    'delete' => 'CASCADE',
                ]
            )
            ->addForeignKey(
                'product_id',
                'products',
                'id',
                [
                    'update' => 'CASCADE',
                    'delete' => 'CASCADE',
                ]
            )
            ->update();

    }

    /**
     * Down Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-down-method
     * @return void
     */
    public function down()
    {
        $this->table('orders')
            ->dropForeignKey(
                'customer_id'
            )
            ->dropForeignKey(
                'status_id'
            )
            ->dropForeignKey(
                'product_id'
            )->save();

        $this->table('orders')->drop()->save();
    }
}
