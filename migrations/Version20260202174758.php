<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260202174758 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE recommendation_bien_etre (id INT AUTO_INCREMENT NOT NULL, recommendation_id INT NOT NULL, description_generee VARCHAR(255) NOT NULL, statut VARCHAR(255) NOT NULL, date_generation DATETIME NOT NULL, date_fin_validite DATE NOT NULL, suivi_bien_etre_id INT NOT NULL, INDEX IDX_EB40C52874C11D9 (suivi_bien_etre_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE suivi_bien_etre (id INT AUTO_INCREMENT NOT NULL, suivi_id INT NOT NULL, date_saisie DATE NOT NULL, humeur VARCHAR(255) NOT NULL, qualite_sommeil INT NOT NULL, niveau_energie INT NOT NULL, niveau_stress INT NOT NULL, qualite_alimentation INT NOT NULL, notes_libres VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('ALTER TABLE recommendation_bien_etre ADD CONSTRAINT FK_EB40C52874C11D9 FOREIGN KEY (suivi_bien_etre_id) REFERENCES suivi_bien_etre (id)');
        $this->addSql('ALTER TABLE user CHANGE specialite_future specialite_future VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE messenger_messages CHANGE delivered_at delivered_at DATETIME DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE recommendation_bien_etre DROP FOREIGN KEY FK_EB40C52874C11D9');
        $this->addSql('DROP TABLE recommendation_bien_etre');
        $this->addSql('DROP TABLE suivi_bien_etre');
        $this->addSql('ALTER TABLE messenger_messages CHANGE delivered_at delivered_at DATETIME DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE `user` CHANGE specialite_future specialite_future VARCHAR(255) DEFAULT \'NULL\'');
    }
}
