<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260208180058 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE classe (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, niveau VARCHAR(255) NOT NULL, PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE groupe_projet (id INT AUTO_INCREMENT NOT NULL, groupe_id INT NOT NULL, nom_projet VARCHAR(255) NOT NULL, matiere VARCHAR(255) NOT NULL, PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE groupe_projet_user (groupe_projet_id INT NOT NULL, user_id INT NOT NULL, INDEX IDX_759C4AA850555145 (groupe_projet_id), INDEX IDX_759C4AA8A76ED395 (user_id), PRIMARY KEY (groupe_projet_id, user_id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE matiere_classe (id INT AUTO_INCREMENT NOT NULL, coefficient DOUBLE PRECISION NOT NULL, chargehoraire INT NOT NULL, scorecomplexite INT NOT NULL, PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE matiere_classe_classe (matiere_classe_id INT NOT NULL, classe_id INT NOT NULL, INDEX IDX_39E20BE64A50F62F (matiere_classe_id), INDEX IDX_39E20BE68F5EA509 (classe_id), PRIMARY KEY (matiere_classe_id, classe_id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE objectif_sante (id INT AUTO_INCREMENT NOT NULL, type VARCHAR(30) NOT NULL, valeur_cible INT NOT NULL, date_debut DATE NOT NULL, date_fin DATE NOT NULL, statut VARCHAR(20) NOT NULL, priorite VARCHAR(10) DEFAULT NULL, progression DOUBLE PRECISION DEFAULT NULL, titre VARCHAR(100) NOT NULL, user_id INT DEFAULT NULL, INDEX IDX_C21403AFA76ED395 (user_id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE preference_alerte (id INT AUTO_INCREMENT NOT NULL, email_actif TINYINT NOT NULL, push_actif TINYINT NOT NULL, site_notif_active TINYINT NOT NULL, delai_rappel_min INT NOT NULL, delai_urgent_heures INT NOT NULL, freaquence_max_par_jour INT NOT NULL, heure_silence_debut DATETIME NOT NULL, heure_silence_fin DATETIME NOT NULL, PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE proposition_reunion (id INT AUTO_INCREMENT NOT NULL, proposition_id INT NOT NULL, titre VARCHAR(255) NOT NULL, date_reunion DATE NOT NULL, heure_debut TIME NOT NULL, heure_fin TIME NOT NULL, lieu VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, status VARCHAR(255) NOT NULL, date_creation DATETIME NOT NULL, nbr_vote_accept INT DEFAULT NULL, id_groupe_id INT NOT NULL, INDEX IDX_FF570D6DFA7089AB (id_groupe_id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE salle (id INT AUTO_INCREMENT NOT NULL, block VARCHAR(1) NOT NULL, number INT NOT NULL, name VARCHAR(10) NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME DEFAULT NULL, PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE seance (id INT AUTO_INCREMENT NOT NULL, matiere VARCHAR(20) NOT NULL, jour VARCHAR(10) NOT NULL, type_seance VARCHAR(15) NOT NULL, mode VARCHAR(15) NOT NULL, salle_id INT NOT NULL, INDEX IDX_DF7DFD0EDC304035 (salle_id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE suivi_bien_etre (id INT AUTO_INCREMENT NOT NULL, date_saisie DATE NOT NULL, humeur VARCHAR(255) NOT NULL, qualite_sommeil INT NOT NULL, niveau_energie INT NOT NULL, niveau_stress INT NOT NULL, qualite_alimentation INT NOT NULL, notes_libres LONGTEXT DEFAULT NULL, score DOUBLE PRECISION DEFAULT NULL, objectif_id INT NOT NULL, INDEX IDX_1C7AE11E157D1AD4 (objectif_id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE tache (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) NOT NULL, type VARCHAR(255) NOT NULL, date_debut DATETIME NOT NULL, date_fin DATETIME NOT NULL, duree_estimee INT NOT NULL, priorite VARCHAR(255) NOT NULL, statut VARCHAR(255) NOT NULL, origine VARCHAR(255) NOT NULL, user_id INT DEFAULT NULL, INDEX IDX_93872075A76ED395 (user_id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE `user` (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, is_verified TINYINT NOT NULL, nom VARCHAR(100) NOT NULL, prenom VARCHAR(100) NOT NULL, num_tel VARCHAR(20) DEFAULT NULL, date_de_naissance DATE NOT NULL, sexe VARCHAR(10) NOT NULL, profile_pic VARCHAR(255) DEFAULT NULL, classe_id INT DEFAULT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), INDEX IDX_8D93D6498F5EA509 (classe_id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0E3BD61CE16BA31DBBF396750 (queue_name, available_at, delivered_at, id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('ALTER TABLE groupe_projet_user ADD CONSTRAINT FK_759C4AA850555145 FOREIGN KEY (groupe_projet_id) REFERENCES groupe_projet (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE groupe_projet_user ADD CONSTRAINT FK_759C4AA8A76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE matiere_classe_classe ADD CONSTRAINT FK_39E20BE64A50F62F FOREIGN KEY (matiere_classe_id) REFERENCES matiere_classe (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE matiere_classe_classe ADD CONSTRAINT FK_39E20BE68F5EA509 FOREIGN KEY (classe_id) REFERENCES classe (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE objectif_sante ADD CONSTRAINT FK_C21403AFA76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE proposition_reunion ADD CONSTRAINT FK_FF570D6DFA7089AB FOREIGN KEY (id_groupe_id) REFERENCES groupe_projet (id)');
        $this->addSql('ALTER TABLE seance ADD CONSTRAINT FK_DF7DFD0EDC304035 FOREIGN KEY (salle_id) REFERENCES salle (id)');
        $this->addSql('ALTER TABLE suivi_bien_etre ADD CONSTRAINT FK_1C7AE11E157D1AD4 FOREIGN KEY (objectif_id) REFERENCES objectif_sante (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE tache ADD CONSTRAINT FK_93872075A76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE `user` ADD CONSTRAINT FK_8D93D6498F5EA509 FOREIGN KEY (classe_id) REFERENCES classe (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE groupe_projet_user DROP FOREIGN KEY FK_759C4AA850555145');
        $this->addSql('ALTER TABLE groupe_projet_user DROP FOREIGN KEY FK_759C4AA8A76ED395');
        $this->addSql('ALTER TABLE matiere_classe_classe DROP FOREIGN KEY FK_39E20BE64A50F62F');
        $this->addSql('ALTER TABLE matiere_classe_classe DROP FOREIGN KEY FK_39E20BE68F5EA509');
        $this->addSql('ALTER TABLE objectif_sante DROP FOREIGN KEY FK_C21403AFA76ED395');
        $this->addSql('ALTER TABLE proposition_reunion DROP FOREIGN KEY FK_FF570D6DFA7089AB');
        $this->addSql('ALTER TABLE seance DROP FOREIGN KEY FK_DF7DFD0EDC304035');
        $this->addSql('ALTER TABLE suivi_bien_etre DROP FOREIGN KEY FK_1C7AE11E157D1AD4');
        $this->addSql('ALTER TABLE tache DROP FOREIGN KEY FK_93872075A76ED395');
        $this->addSql('ALTER TABLE `user` DROP FOREIGN KEY FK_8D93D6498F5EA509');
        $this->addSql('DROP TABLE classe');
        $this->addSql('DROP TABLE groupe_projet');
        $this->addSql('DROP TABLE groupe_projet_user');
        $this->addSql('DROP TABLE matiere_classe');
        $this->addSql('DROP TABLE matiere_classe_classe');
        $this->addSql('DROP TABLE objectif_sante');
        $this->addSql('DROP TABLE preference_alerte');
        $this->addSql('DROP TABLE proposition_reunion');
        $this->addSql('DROP TABLE salle');
        $this->addSql('DROP TABLE seance');
        $this->addSql('DROP TABLE suivi_bien_etre');
        $this->addSql('DROP TABLE tache');
        $this->addSql('DROP TABLE `user`');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
