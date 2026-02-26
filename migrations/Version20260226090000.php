<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Add share and archive fields to objectif_sante.
 */
final class Version20260226090000 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Add share_token, share_expires_at, archived_at, archive_pdf_path to objectif_sante';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('ALTER TABLE objectif_sante ADD share_token VARCHAR(64) DEFAULT NULL');
        $this->addSql('ALTER TABLE objectif_sante ADD share_expires_at DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE objectif_sante ADD archived_at DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE objectif_sante ADD archive_pdf_path VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE objectif_sante DROP archive_pdf_path');
        $this->addSql('ALTER TABLE objectif_sante DROP archived_at');
        $this->addSql('ALTER TABLE objectif_sante DROP share_expires_at');
        $this->addSql('ALTER TABLE objectif_sante DROP share_token');
    }
}
