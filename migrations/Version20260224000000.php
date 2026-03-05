<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260224000000 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Add ban functionality to users table';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE `user` ADD COLUMN is_banned TINYINT(1) NOT NULL DEFAULT 0');
        $this->addSql('ALTER TABLE `user` ADD COLUMN ban_reason LONGTEXT DEFAULT NULL');
        $this->addSql('ALTER TABLE `user` ADD COLUMN banned_at DATETIME DEFAULT NULL');
        $this->addSql('CREATE INDEX idx_banned ON `user` (is_banned)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX idx_banned ON `user`');
        $this->addSql('ALTER TABLE `user` DROP COLUMN is_banned');
        $this->addSql('ALTER TABLE `user` DROP COLUMN ban_reason');
        $this->addSql('ALTER TABLE `user` DROP COLUMN banned_at');
    }
}
