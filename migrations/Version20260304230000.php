<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20260304230000 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Add SmartGroup Matcher fields to groupe_projet table';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('ALTER TABLE groupe_projet 
            ADD niveau_groupe VARCHAR(50) DEFAULT NULL,
            ADD objectif_groupe VARCHAR(50) DEFAULT NULL,
            ADD style_groupe VARCHAR(50) DEFAULT NULL,
            ADD disponibilites JSON DEFAULT NULL
        ');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE groupe_projet 
            DROP COLUMN niveau_groupe,
            DROP COLUMN objectif_groupe,
            DROP COLUMN style_groupe,
            DROP COLUMN disponibilites
        ');
    }
}
