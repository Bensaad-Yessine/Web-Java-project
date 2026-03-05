<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20260221120000 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Add logo_image_name column to groupe_projet table';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('ALTER TABLE groupe_projet ADD logo_image_name VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE groupe_projet DROP COLUMN logo_image_name');
    }
}
