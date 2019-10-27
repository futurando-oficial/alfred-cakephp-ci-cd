<?php

use Migrations\AbstractMigration;

class CreateProjects extends AbstractMigration
{

    public function up()
    {

        $this->table('projects', ['id' => false, 'primary_key' => ['id']])
            ->addColumn('id', 'uuid', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => false,
            ])
            ->addColumn('source', 'string', [
                'default' => null,
                'limit' => 45,
                'null' => false,
            ])
            ->addColumn('status', 'integer', [
                'default' => null,
                'limit' => 1,
                'null' => true,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('last_update', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->create();

        $this->table('projects_users', ['id' => false, 'primary_key' => ['project_id', 'user_id']])
            ->addColumn('project_id', 'uuid', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('user_id', 'uuid', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('role', 'integer', [
                'default' => null,
                'limit' => 1,
                'null' => false,
            ])
            ->addIndex(
                [
                    'project_id',
                ]
            )
            ->addIndex(
                [
                    'user_id',
                ]
            )
            ->create();

        $this->table('projects_users')
            ->addForeignKey(
                'project_id',
                'projects',
                'id',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION'
                ]
            )
            ->addForeignKey(
                'user_id',
                'users',
                'id',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION'
                ]
            )
            ->update();
    }

    public function down()
    {
        $this->table('projects_users')
            ->dropForeignKey(
                'project_id'
            )
            ->dropForeignKey(
                'user_id'
            )->save();

        $this->table('projects')->drop()->save();

        $this->table('projects_users')->drop()->save();
    }
}
