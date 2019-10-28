<?php

use Migrations\AbstractMigration;

class AlterProjects extends AbstractMigration {

    public function up() {

        $this->table('projects')
                ->addColumn('service_id', 'uuid', [
                    'after' => 'source',
                    'default' => null,
                    'length' => null,
                    'null' => false,
                ])
                ->addIndex(
                        [
                            'service_id',
                        ]
                )
                ->update();

        $this->table('projects')
                ->addForeignKey(
                        'service_id', 'services', 'id', [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION'
                        ]
                )
                ->update();
    }

    public function down() {
        $this->table('projects')
                ->dropForeignKey(
                        'service_id'
                )->save();

        $this->table('projects')
                ->removeIndex('service_id')
                ->update();

        $this->table('projects')
                ->removeColumn('service_id')
                ->update();
    }

}
