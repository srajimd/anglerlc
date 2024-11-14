<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AuthorsFixture
 */
class AuthorsFixture extends TestFixture
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
                'firstname' => 'Lorem ipsum dolor sit amet',
                'lastname' => 'Lorem ipsum dolor sit amet',
                'email' => 'Lorem ipsum dolor sit amet',
                'mobile' => 'Lorem ipsum d',
                'status' => 'Lorem ipsum dolor sit amet',
                'created' => '2024-11-13 18:50:56',
                'modified' => '2024-11-13 18:50:56',
            ],
        ];
        parent::init();
    }
}
