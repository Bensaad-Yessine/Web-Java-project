<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260304233812 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE attendance (id INT AUTO_INCREMENT NOT NULL, status VARCHAR(20) NOT NULL, scanned_at DATETIME DEFAULT NULL, device_id VARCHAR(50) DEFAULT NULL, gps_lat DOUBLE PRECISION DEFAULT NULL, gps_lng DOUBLE PRECISION DEFAULT NULL, minutes_late INT DEFAULT NULL, rejection_reason VARCHAR(100) DEFAULT NULL, created_at DATETIME NOT NULL, seance_id INT NOT NULL, student_id INT NOT NULL, INDEX IDX_6DE30D91E3797A94 (seance_id), INDEX IDX_6DE30D91CB944F1A (student_id), UNIQUE INDEX unique_attendance (seance_id, student_id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE classe (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, niveau VARCHAR(50) NOT NULL, anneeuniversitaire VARCHAR(255) NOT NULL, description VARCHAR(255) DEFAULT NULL, filiere VARCHAR(255) DEFAULT NULL, user_id INT DEFAULT NULL, INDEX IDX_8F87BF96A76ED395 (user_id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE conversation (id INT AUTO_INCREMENT NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME DEFAULT NULL, user1_id INT NOT NULL, user2_id INT NOT NULL, INDEX IDX_8A8E26E956AE248B (user1_id), INDEX IDX_8A8E26E9441B8B65 (user2_id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE groupe_projet (id INT AUTO_INCREMENT NOT NULL, nom_projet VARCHAR(255) NOT NULL, matiere VARCHAR(255) NOT NULL, nbr_membre INT DEFAULT NULL, description VARCHAR(255) DEFAULT NULL, created_at DATETIME DEFAULT NULL, updated_at DATETIME DEFAULT NULL, statut VARCHAR(255) DEFAULT NULL, logo_image_name VARCHAR(255) DEFAULT NULL, created_by_id INT DEFAULT NULL, INDEX IDX_3B2B6093B03A8386 (created_by_id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE groupe_projet_user (groupe_projet_id INT NOT NULL, user_id INT NOT NULL, INDEX IDX_759C4AA850555145 (groupe_projet_id), INDEX IDX_759C4AA8A76ED395 (user_id), PRIMARY KEY (groupe_projet_id, user_id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE matiere_classe (id INT AUTO_INCREMENT NOT NULL, coefficient DOUBLE PRECISION NOT NULL, chargehoraire INT NOT NULL, scorecomplexite INT NOT NULL, nom VARCHAR(255) DEFAULT NULL, description VARCHAR(255) DEFAULT NULL, PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE matiere_classe_classe (matiere_classe_id INT NOT NULL, classe_id INT NOT NULL, INDEX IDX_39E20BE64A50F62F (matiere_classe_id), INDEX IDX_39E20BE68F5EA509 (classe_id), PRIMARY KEY (matiere_classe_id, classe_id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE matiere_prerequis (matiere_id INT NOT NULL, prerequis_id INT NOT NULL, INDEX IDX_FEDB82FF46CD258 (matiere_id), INDEX IDX_FEDB82FED196790 (prerequis_id), PRIMARY KEY (matiere_id, prerequis_id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE message (id INT AUTO_INCREMENT NOT NULL, content LONGTEXT NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME DEFAULT NULL, is_read TINYINT DEFAULT 0 NOT NULL, read_at DATETIME DEFAULT NULL, is_edited TINYINT DEFAULT 0 NOT NULL, conversation_id INT NOT NULL, sender_id INT NOT NULL, INDEX IDX_B6BD307F9AC0396 (conversation_id), INDEX IDX_B6BD307FF624B39D (sender_id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE notification (id INT AUTO_INCREMENT NOT NULL, message LONGTEXT NOT NULL, type VARCHAR(20) NOT NULL, is_read TINYINT NOT NULL, created_at DATETIME NOT NULL, user_id INT NOT NULL, tache_id INT DEFAULT NULL, INDEX IDX_BF5476CAA76ED395 (user_id), INDEX IDX_BF5476CAD2235D39 (tache_id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE objectif_sante (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(100) NOT NULL, type VARCHAR(30) NOT NULL, valeur_cible INT NOT NULL, date_debut DATE NOT NULL, date_fin DATE NOT NULL, statut VARCHAR(20) NOT NULL, priorite VARCHAR(10) DEFAULT NULL, share_token VARCHAR(64) DEFAULT NULL, share_expires_at DATETIME DEFAULT NULL, archived_at DATETIME DEFAULT NULL, archive_pdf_path VARCHAR(255) DEFAULT NULL, user_id INT DEFAULT NULL, INDEX IDX_C21403AFA76ED395 (user_id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE preference_alerte (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(50) NOT NULL, is_active TINYINT NOT NULL, is_default TINYINT NOT NULL, email_actif TINYINT NOT NULL, push_actif TINYINT NOT NULL, site_notif_active TINYINT NOT NULL, delai_rappel_min INT NOT NULL, heure_silence_debut TIME NOT NULL, heure_silence_fin TIME NOT NULL, date_creation DATETIME NOT NULL, date_mise_ajour DATETIME NOT NULL, etudiant_id INT DEFAULT NULL, INDEX IDX_5F2FB0A5DDEAB1A3 (etudiant_id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE proposition_reunion (id INT AUTO_INCREMENT NOT NULL, proposition_id INT NOT NULL, titre VARCHAR(255) NOT NULL, date_reunion DATE NOT NULL, heure_debut TIME NOT NULL, heure_fin TIME NOT NULL, lieu VARCHAR(255) DEFAULT NULL, description VARCHAR(255) NOT NULL, status VARCHAR(255) NOT NULL, date_creation DATETIME NOT NULL, date_fin_vote DATETIME DEFAULT NULL, nbr_vote_accept INT DEFAULT NULL, created_at DATETIME DEFAULT NULL, updated_at DATETIME DEFAULT NULL, id_groupe_id INT NOT NULL, INDEX IDX_FF570D6DFA7089AB (id_groupe_id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE quiz_attempt (id INT AUTO_INCREMENT NOT NULL, correct_count INT NOT NULL, total_count INT NOT NULL, percent DOUBLE PRECISION NOT NULL, created_at DATETIME NOT NULL, user_id INT NOT NULL, matiere_id INT NOT NULL, INDEX IDX_AB6AFC6A76ED395 (user_id), INDEX IDX_AB6AFC6F46CD258 (matiere_id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE quiz_attempt_detail (id INT AUTO_INCREMENT NOT NULL, user_answer VARCHAR(1) DEFAULT NULL, correct_answer VARCHAR(1) NOT NULL, is_correct TINYINT NOT NULL, attempt_id INT NOT NULL, question_id INT NOT NULL, INDEX IDX_60888C4AB191BE6B (attempt_id), INDEX IDX_60888C4A1E27F6BF (question_id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE quiz_question (id INT AUTO_INCREMENT NOT NULL, question VARCHAR(255) NOT NULL, choice_a VARCHAR(255) NOT NULL, choice_b VARCHAR(255) NOT NULL, choice_c VARCHAR(255) DEFAULT NULL, choice_d VARCHAR(255) DEFAULT NULL, correct_choice VARCHAR(1) NOT NULL, explanation LONGTEXT DEFAULT NULL, matiere_id INT NOT NULL, INDEX IDX_6033B00BF46CD258 (matiere_id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE reset_password_request (id INT AUTO_INCREMENT NOT NULL, selector VARCHAR(20) NOT NULL, hashed_token VARCHAR(100) NOT NULL, requested_at DATETIME NOT NULL, expires_at DATETIME NOT NULL, user_id INT NOT NULL, INDEX IDX_7CE748AA76ED395 (user_id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE salle (id INT AUTO_INCREMENT NOT NULL, block VARCHAR(1) NOT NULL, number INT NOT NULL, name VARCHAR(10) NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME DEFAULT NULL, etage INT NOT NULL, capacite VARCHAR(255) NOT NULL, disponibilite TINYINT DEFAULT 1 NOT NULL, PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE seance (id INT AUTO_INCREMENT NOT NULL, jour VARCHAR(10) NOT NULL, type_seance VARCHAR(15) NOT NULL, mode VARCHAR(25) NOT NULL, heure_debut DATETIME NOT NULL, heure_fin DATETIME NOT NULL, created_at DATETIME DEFAULT NULL, qr_token VARCHAR(512) DEFAULT NULL, qr_expires_at DATETIME DEFAULT NULL, qr_url VARCHAR(1024) DEFAULT NULL, salle_id INT NOT NULL, matiere_id INT NOT NULL, classe_id INT NOT NULL, INDEX IDX_DF7DFD0EDC304035 (salle_id), INDEX IDX_DF7DFD0EF46CD258 (matiere_id), INDEX IDX_DF7DFD0E8F5EA509 (classe_id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE student_intelligence_profile (id INT AUTO_INCREMENT NOT NULL, analyzed_at DATETIME NOT NULL, abandonment_rate DOUBLE PRECISION DEFAULT NULL, completion_rate DOUBLE PRECISION DEFAULT NULL, average_start_delay_minutes DOUBLE PRECISION DEFAULT NULL, average_completion_duration_minutes DOUBLE PRECISION DEFAULT NULL, pause_frequency DOUBLE PRECISION DEFAULT NULL, most_productive_hour SMALLINT DEFAULT NULL, most_productive_day_of_week SMALLINT DEFAULT NULL, abandonment_rate_by_type JSON DEFAULT NULL, completion_rate_by_type JSON DEFAULT NULL, average_start_delay_by_type JSON DEFAULT NULL, global_risk_trend DOUBLE PRECISION DEFAULT NULL, forgotten_task_probability DOUBLE PRECISION DEFAULT NULL, overdue_probability DOUBLE PRECISION DEFAULT NULL, weekly_productivity_summary LONGTEXT DEFAULT NULL, behavioral_advice LONGTEXT DEFAULT NULL, user_id INT NOT NULL, INDEX IDX_AED0614A76ED395 (user_id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE subscription_pack (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(100) NOT NULL, description LONGTEXT DEFAULT NULL, price NUMERIC(10, 2) NOT NULL, currency VARCHAR(10) NOT NULL, duration_days INT NOT NULL, features JSON DEFAULT NULL, is_active TINYINT NOT NULL, icon VARCHAR(50) DEFAULT NULL, color VARCHAR(20) DEFAULT NULL, is_popular TINYINT NOT NULL, PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE suivi_bien_etre (id INT AUTO_INCREMENT NOT NULL, date_saisie DATE NOT NULL, humeur VARCHAR(255) NOT NULL, qualite_sommeil INT NOT NULL, niveau_energie INT NOT NULL, niveau_stress INT NOT NULL, qualite_alimentation INT NOT NULL, notes_libres LONGTEXT DEFAULT NULL, score DOUBLE PRECISION DEFAULT NULL, objectif_id INT NOT NULL, INDEX IDX_1C7AE11E157D1AD4 (objectif_id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE suivi_tache (id INT AUTO_INCREMENT NOT NULL, date_action DATETIME NOT NULL, ancien_statut VARCHAR(50) DEFAULT NULL, nouveau_statut VARCHAR(50) DEFAULT NULL, commentaire LONGTEXT DEFAULT NULL, tache_id INT NOT NULL, INDEX IDX_308B0056D2235D39 (tache_id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE tache (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(100) NOT NULL, type VARCHAR(255) NOT NULL, date_debut DATETIME NOT NULL, date_fin DATETIME NOT NULL, priorite VARCHAR(255) NOT NULL, statut VARCHAR(255) NOT NULL, created_at DATETIME DEFAULT NULL, date_echeance DATE DEFAULT NULL, description VARCHAR(255) DEFAULT NULL, duree_estimee INT DEFAULT NULL, updated_at DATETIME DEFAULT NULL, user_id INT NOT NULL, INDEX IDX_93872075A76ED395 (user_id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE `user` (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, is_verified TINYINT NOT NULL, nom VARCHAR(100) NOT NULL, prenom VARCHAR(100) NOT NULL, num_tel VARCHAR(20) DEFAULT NULL, date_de_naissance DATE NOT NULL, sexe VARCHAR(10) NOT NULL, profile_pic VARCHAR(255) DEFAULT NULL, created_at DATETIME DEFAULT NULL, is_banned TINYINT DEFAULT 0 NOT NULL, ban_reason LONGTEXT DEFAULT NULL, banned_at DATETIME DEFAULT NULL, verification_token VARCHAR(255) DEFAULT NULL, classe_id INT DEFAULT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), INDEX IDX_8D93D6498F5EA509 (classe_id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE vote (id INT AUTO_INCREMENT NOT NULL, vote VARCHAR(255) NOT NULL, voted_at DATETIME NOT NULL, proposition_id INT NOT NULL, user_id INT NOT NULL, INDEX IDX_5A108564DB96F9E (proposition_id), INDEX IDX_5A108564A76ED395 (user_id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0E3BD61CE16BA31DBBF396750 (queue_name, available_at, delivered_at, id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('ALTER TABLE attendance ADD CONSTRAINT FK_6DE30D91E3797A94 FOREIGN KEY (seance_id) REFERENCES seance (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE attendance ADD CONSTRAINT FK_6DE30D91CB944F1A FOREIGN KEY (student_id) REFERENCES `user` (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE classe ADD CONSTRAINT FK_8F87BF96A76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id) ON DELETE SET NULL');
        $this->addSql('ALTER TABLE conversation ADD CONSTRAINT FK_8A8E26E956AE248B FOREIGN KEY (user1_id) REFERENCES `user` (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE conversation ADD CONSTRAINT FK_8A8E26E9441B8B65 FOREIGN KEY (user2_id) REFERENCES `user` (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE groupe_projet ADD CONSTRAINT FK_3B2B6093B03A8386 FOREIGN KEY (created_by_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE groupe_projet_user ADD CONSTRAINT FK_759C4AA850555145 FOREIGN KEY (groupe_projet_id) REFERENCES groupe_projet (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE groupe_projet_user ADD CONSTRAINT FK_759C4AA8A76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE matiere_classe_classe ADD CONSTRAINT FK_39E20BE64A50F62F FOREIGN KEY (matiere_classe_id) REFERENCES matiere_classe (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE matiere_classe_classe ADD CONSTRAINT FK_39E20BE68F5EA509 FOREIGN KEY (classe_id) REFERENCES classe (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE matiere_prerequis ADD CONSTRAINT FK_FEDB82FF46CD258 FOREIGN KEY (matiere_id) REFERENCES matiere_classe (id)');
        $this->addSql('ALTER TABLE matiere_prerequis ADD CONSTRAINT FK_FEDB82FED196790 FOREIGN KEY (prerequis_id) REFERENCES matiere_classe (id)');
        $this->addSql('ALTER TABLE message ADD CONSTRAINT FK_B6BD307F9AC0396 FOREIGN KEY (conversation_id) REFERENCES conversation (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE message ADD CONSTRAINT FK_B6BD307FF624B39D FOREIGN KEY (sender_id) REFERENCES `user` (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE notification ADD CONSTRAINT FK_BF5476CAA76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE notification ADD CONSTRAINT FK_BF5476CAD2235D39 FOREIGN KEY (tache_id) REFERENCES tache (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE objectif_sante ADD CONSTRAINT FK_C21403AFA76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE preference_alerte ADD CONSTRAINT FK_5F2FB0A5DDEAB1A3 FOREIGN KEY (etudiant_id) REFERENCES `user` (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE proposition_reunion ADD CONSTRAINT FK_FF570D6DFA7089AB FOREIGN KEY (id_groupe_id) REFERENCES groupe_projet (id)');
        $this->addSql('ALTER TABLE quiz_attempt ADD CONSTRAINT FK_AB6AFC6A76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE quiz_attempt ADD CONSTRAINT FK_AB6AFC6F46CD258 FOREIGN KEY (matiere_id) REFERENCES matiere_classe (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE quiz_attempt_detail ADD CONSTRAINT FK_60888C4AB191BE6B FOREIGN KEY (attempt_id) REFERENCES quiz_attempt (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE quiz_attempt_detail ADD CONSTRAINT FK_60888C4A1E27F6BF FOREIGN KEY (question_id) REFERENCES quiz_question (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE quiz_question ADD CONSTRAINT FK_6033B00BF46CD258 FOREIGN KEY (matiere_id) REFERENCES matiere_classe (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reset_password_request ADD CONSTRAINT FK_7CE748AA76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE seance ADD CONSTRAINT FK_DF7DFD0EDC304035 FOREIGN KEY (salle_id) REFERENCES salle (id)');
        $this->addSql('ALTER TABLE seance ADD CONSTRAINT FK_DF7DFD0EF46CD258 FOREIGN KEY (matiere_id) REFERENCES matiere_classe (id)');
        $this->addSql('ALTER TABLE seance ADD CONSTRAINT FK_DF7DFD0E8F5EA509 FOREIGN KEY (classe_id) REFERENCES classe (id)');
        $this->addSql('ALTER TABLE student_intelligence_profile ADD CONSTRAINT FK_AED0614A76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE suivi_bien_etre ADD CONSTRAINT FK_1C7AE11E157D1AD4 FOREIGN KEY (objectif_id) REFERENCES objectif_sante (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE suivi_tache ADD CONSTRAINT FK_308B0056D2235D39 FOREIGN KEY (tache_id) REFERENCES tache (id)');
        $this->addSql('ALTER TABLE tache ADD CONSTRAINT FK_93872075A76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE `user` ADD CONSTRAINT FK_8D93D6498F5EA509 FOREIGN KEY (classe_id) REFERENCES classe (id) ON DELETE SET NULL');
        $this->addSql('ALTER TABLE vote ADD CONSTRAINT FK_5A108564DB96F9E FOREIGN KEY (proposition_id) REFERENCES proposition_reunion (id)');
        $this->addSql('ALTER TABLE vote ADD CONSTRAINT FK_5A108564A76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE attendance DROP FOREIGN KEY FK_6DE30D91E3797A94');
        $this->addSql('ALTER TABLE attendance DROP FOREIGN KEY FK_6DE30D91CB944F1A');
        $this->addSql('ALTER TABLE classe DROP FOREIGN KEY FK_8F87BF96A76ED395');
        $this->addSql('ALTER TABLE conversation DROP FOREIGN KEY FK_8A8E26E956AE248B');
        $this->addSql('ALTER TABLE conversation DROP FOREIGN KEY FK_8A8E26E9441B8B65');
        $this->addSql('ALTER TABLE groupe_projet DROP FOREIGN KEY FK_3B2B6093B03A8386');
        $this->addSql('ALTER TABLE groupe_projet_user DROP FOREIGN KEY FK_759C4AA850555145');
        $this->addSql('ALTER TABLE groupe_projet_user DROP FOREIGN KEY FK_759C4AA8A76ED395');
        $this->addSql('ALTER TABLE matiere_classe_classe DROP FOREIGN KEY FK_39E20BE64A50F62F');
        $this->addSql('ALTER TABLE matiere_classe_classe DROP FOREIGN KEY FK_39E20BE68F5EA509');
        $this->addSql('ALTER TABLE matiere_prerequis DROP FOREIGN KEY FK_FEDB82FF46CD258');
        $this->addSql('ALTER TABLE matiere_prerequis DROP FOREIGN KEY FK_FEDB82FED196790');
        $this->addSql('ALTER TABLE message DROP FOREIGN KEY FK_B6BD307F9AC0396');
        $this->addSql('ALTER TABLE message DROP FOREIGN KEY FK_B6BD307FF624B39D');
        $this->addSql('ALTER TABLE notification DROP FOREIGN KEY FK_BF5476CAA76ED395');
        $this->addSql('ALTER TABLE notification DROP FOREIGN KEY FK_BF5476CAD2235D39');
        $this->addSql('ALTER TABLE objectif_sante DROP FOREIGN KEY FK_C21403AFA76ED395');
        $this->addSql('ALTER TABLE preference_alerte DROP FOREIGN KEY FK_5F2FB0A5DDEAB1A3');
        $this->addSql('ALTER TABLE proposition_reunion DROP FOREIGN KEY FK_FF570D6DFA7089AB');
        $this->addSql('ALTER TABLE quiz_attempt DROP FOREIGN KEY FK_AB6AFC6A76ED395');
        $this->addSql('ALTER TABLE quiz_attempt DROP FOREIGN KEY FK_AB6AFC6F46CD258');
        $this->addSql('ALTER TABLE quiz_attempt_detail DROP FOREIGN KEY FK_60888C4AB191BE6B');
        $this->addSql('ALTER TABLE quiz_attempt_detail DROP FOREIGN KEY FK_60888C4A1E27F6BF');
        $this->addSql('ALTER TABLE quiz_question DROP FOREIGN KEY FK_6033B00BF46CD258');
        $this->addSql('ALTER TABLE reset_password_request DROP FOREIGN KEY FK_7CE748AA76ED395');
        $this->addSql('ALTER TABLE seance DROP FOREIGN KEY FK_DF7DFD0EDC304035');
        $this->addSql('ALTER TABLE seance DROP FOREIGN KEY FK_DF7DFD0EF46CD258');
        $this->addSql('ALTER TABLE seance DROP FOREIGN KEY FK_DF7DFD0E8F5EA509');
        $this->addSql('ALTER TABLE student_intelligence_profile DROP FOREIGN KEY FK_AED0614A76ED395');
        $this->addSql('ALTER TABLE suivi_bien_etre DROP FOREIGN KEY FK_1C7AE11E157D1AD4');
        $this->addSql('ALTER TABLE suivi_tache DROP FOREIGN KEY FK_308B0056D2235D39');
        $this->addSql('ALTER TABLE tache DROP FOREIGN KEY FK_93872075A76ED395');
        $this->addSql('ALTER TABLE `user` DROP FOREIGN KEY FK_8D93D6498F5EA509');
        $this->addSql('ALTER TABLE vote DROP FOREIGN KEY FK_5A108564DB96F9E');
        $this->addSql('ALTER TABLE vote DROP FOREIGN KEY FK_5A108564A76ED395');
        $this->addSql('DROP TABLE attendance');
        $this->addSql('DROP TABLE classe');
        $this->addSql('DROP TABLE conversation');
        $this->addSql('DROP TABLE groupe_projet');
        $this->addSql('DROP TABLE groupe_projet_user');
        $this->addSql('DROP TABLE matiere_classe');
        $this->addSql('DROP TABLE matiere_classe_classe');
        $this->addSql('DROP TABLE matiere_prerequis');
        $this->addSql('DROP TABLE message');
        $this->addSql('DROP TABLE notification');
        $this->addSql('DROP TABLE objectif_sante');
        $this->addSql('DROP TABLE preference_alerte');
        $this->addSql('DROP TABLE proposition_reunion');
        $this->addSql('DROP TABLE quiz_attempt');
        $this->addSql('DROP TABLE quiz_attempt_detail');
        $this->addSql('DROP TABLE quiz_question');
        $this->addSql('DROP TABLE reset_password_request');
        $this->addSql('DROP TABLE salle');
        $this->addSql('DROP TABLE seance');
        $this->addSql('DROP TABLE student_intelligence_profile');
        $this->addSql('DROP TABLE subscription_pack');
        $this->addSql('DROP TABLE suivi_bien_etre');
        $this->addSql('DROP TABLE suivi_tache');
        $this->addSql('DROP TABLE tache');
        $this->addSql('DROP TABLE `user`');
        $this->addSql('DROP TABLE vote');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
