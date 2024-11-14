<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * BooksFixture
 */
class BooksFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'publisher_id' => 1,
                'author_id' => 1,
                'title' => 'Lorem ipsum dolor sit amet',
                'published_date' => '2024-11-13',
                'status' => 'Lorem ipsum dolor sit amet',
                'created' => '2024-11-13 19:08:56',
                'modified' => '2024-11-13 19:08:56',
            ],
        ];
        parent::init();
    }
}
