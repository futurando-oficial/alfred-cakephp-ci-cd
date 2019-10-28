<?php

use Migrations\AbstractMigration;

class CreateServices extends AbstractMigration {

    public function up() {

        $this->table('authentications')
                ->removeColumn('service')
                ->update();

        $this->table('services', ['id' => false, 'primary_key' => ['id']])
                ->addColumn('id', 'uuid', [
                    'default' => null,
                    'limit' => null,
                    'null' => false,
                ])
                ->addColumn('module', 'string', [
                    'default' => null,
                    'limit' => 15,
                    'null' => false,
                ])
                ->addColumn('name', 'string', [
                    'default' => null,
                    'limit' => 45,
                    'null' => false,
                ])
                ->addColumn('logo', 'string', [
                    'default' => null,
                    'limit' => 45,
                    'null' => false,
                ])
                ->addColumn('status', 'integer', [
                    'default' => null,
                    'limit' => 1,
                    'null' => false,
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
                ->create();

        $this->table('authentications')
                ->addColumn('service_id', 'uuid', [
                    'after' => 'user_id',
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

        $this->table('authentications')
                ->addForeignKey(
                        'service_id', 'services', 'id', [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION'
                        ]
                )
                ->update();
    }

    public function down() {
        $this->table('authentications')
                ->dropForeignKey(
                        'service_id'
                )->save();

        $this->table('authentications')
                ->removeIndex('service_id')
                ->update();

        $this->table('authentications')
                ->addColumn('service', 'integer', [
                    'after' => 'user_id',
                    'default' => null,
                    'length' => 1,
                    'null' => false,
                ])
                ->removeColumn('service_id')
                ->update();

        $this->table('services')->drop()->save();
    }

}
