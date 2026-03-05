<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260211202856 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE groupe_projet CHANGE description description VARCHAR(255) DEFAULT NULL, CHANGE created_at created_at DATETIME DEFAULT NULL, CHANGE updated_at updated_at DATETIME DEFAULT NULL, CHANGE statut statut VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE matiere_classe CHANGE nom nom VARCHAR(255) DEFAULT NULL, CHANGE description description VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE objectif_sante CHANGE priorite priorite VARCHAR(10) DEFAULT NULL, CHANGE progression progression DOUBLE PRECISION DEFAULT NULL');
        $this->addSql('ALTER TABLE proposition_reunion CHANGE created_at created_at DATETIME DEFAULT NULL, CHANGE updated_at updated_at DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE salle CHANGE updated_at updated_at DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE suivi_bien_etre CHANGE score score DOUBLE PRECISION DEFAULT NULL');
        $this->addSql('ALTER TABLE tache CHANGE created_at created_at DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE user CHANGE roles roles JSON NOT NULL, CHANGE num_tel num_tel VARCHAR(20) DEFAULT NULL, CHANGE profile_pic profile_pic VARCHAR(255) DEFAULT NULL, CHANGE created_at created_at DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE messenger_messages CHANGE delivered_at delivered_at DATETIME DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE groupe_projet CHANGE description description VARCHAR(255) DEFAULT \'NULL\', CHANGE created_at created_at DATETIME DEFAULT \'NULL\', CHANGE updated_at updated_at DATETIME DEFAULT \'NULL\', CHANGE statut statut VARCHAR(255) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE matiere_classe CHANGE nom nom VARCHAR(255) DEFAULT \'NULL\', CHANGE description description VARCHAR(255) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE messenger_messages CHANGE delivered_at delivered_at DATETIME DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE objectif_sante CHANGE priorite priorite VARCHAR(10) DEFAULT \'NULL\', CHANGE progression progression DOUBLE PRECISION DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE proposition_reunion CHANGE created_at created_at DATETIME DEFAULT \'NULL\', CHANGE updated_at updated_at DATETIME DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE salle CHANGE updated_at updated_at DATETIME DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE suivi_bien_etre CHANGE score score DOUBLE PRECISION DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE tache CHANGE created_at created_at DATETIME DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE `user` CHANGE roles roles LONGTEXT NOT NULL COLLATE `utf8mb4_bin`, CHANGE num_tel num_tel VARCHAR(20) DEFAULT \'NULL\', CHANGE profile_pic profile_pic VARCHAR(255) DEFAULT \'NULL\', CHANGE created_at created_at DATETIME DEFAULT \'NULL\'');
    }
}
