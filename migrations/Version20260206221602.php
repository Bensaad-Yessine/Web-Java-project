<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260206221602 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE groupe_projet (id INT AUTO_INCREMENT NOT NULL, groupe_id INT NOT NULL, nom_projet VARCHAR(255) NOT NULL, matiere VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE groupe_projet_user (groupe_projet_id INT NOT NULL, user_id INT NOT NULL, INDEX IDX_759C4AA850555145 (groupe_projet_id), INDEX IDX_759C4AA8A76ED395 (user_id), PRIMARY KEY(groupe_projet_id, user_id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE preference_alerte (id INT AUTO_INCREMENT NOT NULL, email_actif TINYINT(1) NOT NULL, push_actif TINYINT(1) NOT NULL, site_notif_active TINYINT(1) NOT NULL, delai_rappel_min INT NOT NULL, delai_urgent_heures INT NOT NULL, freaquence_max_par_jour INT NOT NULL, heure_silence_debut DATETIME NOT NULL, heure_silence_fin DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE proposition_reunion (id INT AUTO_INCREMENT NOT NULL, proposition_id INT NOT NULL, titre VARCHAR(255) NOT NULL, date_reunion DATE NOT NULL, heure_debut TIME NOT NULL, heure_fin TIME NOT NULL, lieu VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, status VARCHAR(255) NOT NULL, date_creation DATETIME NOT NULL, nbr_vote_accept INT DEFAULT NULL, id_groupe_id INT NOT NULL, INDEX IDX_FF570D6DFA7089AB (id_groupe_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE tache (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) NOT NULL, type VARCHAR(255) NOT NULL, date_debut DATETIME NOT NULL, date_fin DATETIME NOT NULL, duree_estimee INT NOT NULL, priorite VARCHAR(255) NOT NULL, statut VARCHAR(255) NOT NULL, origine VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE `user` (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, date_de_naissance DATE NOT NULL, classe VARCHAR(255) NOT NULL, specialite_future VARCHAR(255) DEFAULT NULL, sexe VARCHAR(10) NOT NULL, role VARCHAR(20) NOT NULL, password VARCHAR(255) NOT NULL, profilepic VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0E3BD61CE16BA31DBBF396750 (queue_name, available_at, delivered_at, id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('ALTER TABLE groupe_projet_user ADD CONSTRAINT FK_759C4AA850555145 FOREIGN KEY (groupe_projet_id) REFERENCES groupe_projet (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE groupe_projet_user ADD CONSTRAINT FK_759C4AA8A76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE proposition_reunion ADD CONSTRAINT FK_FF570D6DFA7089AB FOREIGN KEY (id_groupe_id) REFERENCES groupe_projet (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE groupe_projet_user DROP FOREIGN KEY FK_759C4AA850555145');
        $this->addSql('ALTER TABLE groupe_projet_user DROP FOREIGN KEY FK_759C4AA8A76ED395');
        $this->addSql('ALTER TABLE proposition_reunion DROP FOREIGN KEY FK_FF570D6DFA7089AB');
        $this->addSql('DROP TABLE groupe_projet');
        $this->addSql('DROP TABLE groupe_projet_user');
        $this->addSql('DROP TABLE preference_alerte');
        $this->addSql('DROP TABLE proposition_reunion');
        $this->addSql('DROP TABLE tache');
        $this->addSql('DROP TABLE `user`');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
