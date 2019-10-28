<?php

use Migrations\AbstractMigration;

class CreateAuthentications extends AbstractMigration {

    public function up() {

        $this->table('authentications', ['id' => false, 'primary_key' => ['id']])
                ->addColumn('id', 'uuid', [
                    'default' => null,
                    'limit' => null,
                    'null' => false,
                ])
                ->addColumn('user_id', 'uuid', [
                    'default' => null,
                    'limit' => null,
                    'null' => false,
                ])
                ->addColumn('service', 'integer', [
                    'default' => null,
                    'limit' => 1,
                    'null' => false,
                ])
                ->addColumn('token', 'string', [
                    'default' => null,
                    'limit' => 255,
                    'null' => false,
                ])
                ->addColumn('expiration', 'datetime', [
                    'default' => null,
                    'limit' => null,
                    'null' => true,
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
                ->addIndex(
                        [
                            'user_id',
                        ]
                )
                ->create();

        $this->table('authentications')
                ->addForeignKey(
                        'user_id', 'users', 'id', [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION'
                        ]
                )
                ->update();
    }

    public function down() {
        $this->table('authentications')
                ->dropForeignKey(
                        'user_id'
                )->save();

        $this->table('authentications')->drop()->save();
    }

}
