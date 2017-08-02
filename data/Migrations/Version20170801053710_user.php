<?php

namespace Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20170801053710_user extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $table = $schema->createTable('users');
        $table->addColumn('id', 'integer', ['autoincrement'=>true]);        
        $table->addColumn('email', 'text', ['notnull'=>true]);
        $table->addColumn('password', 'text', ['notnull'=>true]);
        $table->addColumn('name', 'text', ['notnull'=>true]);
        $table->addColumn('phone', 'text');
        $table->addColumn('role', 'integer');
        $table->addColumn('address', 'text');
        $table->addColumn('status', 'integer');
        $table->addColumn('token', 'text');
        $table->addColumn('date_created', 'datetime', ['notnull'=>true]);
        $table->setPrimaryKey(['id']);
        $table->addOption('engine', 'InnoDB');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $schema->dropTable('users');

    }
}
