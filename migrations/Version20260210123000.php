<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20260210123000 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Add updated_at column to groupe_projet';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('ALTER TABLE groupe_projet ADD updated_at DATETIME DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE groupe_projet DROP updated_at');
    }
}
