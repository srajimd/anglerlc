<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Author Entity
 *
 * @property int $id
 * @property string $firstname
 * @property string $lastname
 * @property string|null $email
 * @property string|null $mobile
 * @property string $status
 * @property \Cake\I18n\DateTime $created
 * @property \Cake\I18n\DateTime $modified
 */
class Author extends Entity
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
        'firstname' => true,
        'lastname' => true,
        'email' => true,
        'mobile' => true,
        'status' => true,
        'created' => true,
        'modified' => true,
    ];
}
