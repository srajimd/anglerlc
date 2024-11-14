<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PublishersFixture
 */
class PublishersFixture extends TestFixture
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
                'name' => 'Lorem ipsum dolor sit amet',
                'publisher_name' => 'Lorem ipsum dolor sit amet',
                'address1' => 'Lorem ipsum dolor sit amet',
                'address2' => 'Lorem ipsum dolor sit amet',
                'city' => 'Lorem ipsum dolor sit amet',
                'state' => 'Lorem ipsum dolor sit amet',
                'pincode' => 'Lorem ipsum dolor sit amet',
                'status' => 1,
                'created' => 1731469904,
                'modified' => 1731469904,
            ],
        ];
        parent::init();
    }
}
