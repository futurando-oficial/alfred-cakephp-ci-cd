<?php

use Migrations\AbstractMigration;

class AlterProjectsUsers extends AbstractMigration
{

    public function up()
    {

        $this->table('projects_users')
            ->changeColumn('role', 'integer', [
                'default' => '1',
                'limit' => 1,
                'null' => false,
            ])
            ->update();
    }

    public function down()
    {

        $this->table('projects_users')
            ->changeColumn('role', 'integer', [
                'default' => null,
                'length' => 1,
                'null' => false,
            ])
            ->update();
    }
}
