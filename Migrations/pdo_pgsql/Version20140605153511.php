<?php

namespace Innova\NonDigitalResourceBundle\Migrations\pdo_pgsql;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated migration based on mapping information: modify it with caution
 *
 * Generation date: 2014/06/05 03:35:12
 */
class Version20140605153511 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        $this->addSql("
            CREATE TABLE innova_non_digital_resource (
                id SERIAL NOT NULL, 
                description TEXT DEFAULT NULL, 
                resourceNode_id INT DEFAULT NULL, 
                PRIMARY KEY(id)
            )
        ");
        $this->addSql("
            CREATE UNIQUE INDEX UNIQ_6F37F288B87FAB32 ON innova_non_digital_resource (resourceNode_id)
        ");
        $this->addSql("
            ALTER TABLE innova_non_digital_resource 
            ADD CONSTRAINT FK_6F37F288B87FAB32 FOREIGN KEY (resourceNode_id) 
            REFERENCES claro_resource_node (id) 
            ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE
        ");
    }

    public function down(Schema $schema)
    {
        $this->addSql("
            DROP TABLE innova_non_digital_resource
        ");
    }
}