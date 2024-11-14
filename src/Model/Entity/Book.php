<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Book Entity
 *
 * @property int $id
 * @property int $publisher_id
 * @property int $author_id
 * @property string $title
 * @property \Cake\I18n\Date $published_date
 * @property string $status
 * @property \Cake\I18n\DateTime $created
 * @property \Cake\I18n\DateTime $modified
 *
 * @property \App\Model\Entity\Publisher $publisher
 * @property \App\Model\Entity\Author $author
 */
class Book extends Entity
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
        'publisher_id' => true,
        'author_id' => true,
        'title' => true,
        'published_date' => true,
        'status' => true,
        'created' => true,
        'modified' => true,
        'publisher' => true,
        'author' => true,
    ];
}
