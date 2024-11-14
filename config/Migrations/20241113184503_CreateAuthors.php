<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateAuthors extends AbstractMigration
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
        $table = $this->table('authors');
        $table->addColumn('firstname', 'string', [
            'default' => null,
            'limit' => 50,
            'null' => false,
        ]);
        $table->addColumn('lastname', 'string', [
            'default' => null,
            'limit' => 50,
            'null' => false,
        ]);
        $table->addColumn('email', 'string', [
            'default' => null,
            'limit' => 80,
            'null' => true,
        ]);
        $table->addColumn('mobile', 'string', [
            'default' => null,
            'limit' => 15,
            'null' => true,
        ]);
        $table->addColumn('status', 'enum', [
            'values' => ['Y', 'N'],
            'default' => 'Y',
            'null' => false,
        ]);
        $table->addColumn('created', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('modified', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->create();
    }
}
