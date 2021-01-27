<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Order Entity
 *
 * @property int $id
 * @property int $product_id
 * @property int $customer_id
 * @property int $status_id
 * @property int $quantity
 * @property \Cake\I18n\FrozenTime $created
 * @property string $description
 *
 * @property \App\Model\Entity\Product $product
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Status $status
 */
class Order extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'product_id' => true,
        'customer_id' => true,
        'status_id' => true,
        'quantity' => true,
        'created' => true,
        'description' => true,
        'product' => true,
        'user' => true,
        'status' => true,
    ];
}
