<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Publisher Entity
 *
 * @property int $id
 * @property string $name
 * @property string $publisher_name
 * @property string $address1
 * @property string $address2
 * @property string $city
 * @property string $state
 * @property string $pincode
 * @property int $status
 * @property \Cake\I18n\DateTime $created
 * @property \Cake\I18n\DateTime|null $modified
 */
class Publisher extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected array $_accessible = [
        'name' => true,
        'publisher_name' => true,
        'address1' => true,
        'address2' => true,
        'city' => true,
        'state' => true,
        'pincode' => true,
        'status' => true,
        'created' => true,
        'modified' => true,
    ];
}
