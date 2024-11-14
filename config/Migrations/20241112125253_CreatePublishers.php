<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreatePublishers extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change(): void
    {
        $table = $this->table('publishers');
        $table->addColumn('name', 'string', ['limit' => 100])
            ->addColumn('publisher_name', 'string', ['limit' => 50])
            ->addColumn('address1', 'string', ['limit' => 100])
            ->addColumn('address2', 'string', ['limit' => 100])
            ->addColumn('city', 'string', ['limit' => 50])
            ->addColumn('state', 'string', ['limit' => 50])
            ->addColumn('pincode', 'string', ['limit' => 50])
            ->addColumn('status', 'enum', ['values' => ['Y', 'N'], 'default' => 'Y', 'null' => false])
            ->addTimestamps()->create();
    }
}
