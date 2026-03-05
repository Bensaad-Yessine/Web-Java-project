<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260224120000 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Add verification token to user table';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE `user` ADD COLUMN verification_token VARCHAR(255) DEFAULT NULL');
        $this->addSql('CREATE INDEX idx_verification_token ON `user` (verification_token)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX idx_verification_token ON `user`');
        $this->addSql('ALTER TABLE `user` DROP COLUMN verification_token');
    }
}
