<?php


use Phinx\Migration\AbstractMigration;

class Users extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     *
     * Uncomment this method if you would like to use it.
     */
    public function change()
    {
        // create the table
        $table = $this->table('users');
        $table->addColumn('name', 'string', ['null' => null, 'limit' => 20])
            ->addColumn('email', 'string', ['null' => false, 'limit' => 80])
            ->addColumn('country', 'string', ['null' => false, 'limit' => 80])
            ->addColumn('status', 'integer', ['default' => 1, 'limit' => 2])
            ->addColumn('created', 'datetime')
            ->create();
    }
}
