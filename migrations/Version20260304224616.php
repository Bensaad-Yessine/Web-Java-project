<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260304224616 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE attendance CHANGE scanned_at scanned_at DATETIME DEFAULT NULL, CHANGE device_id device_id VARCHAR(50) DEFAULT NULL, CHANGE gps_lat gps_lat DOUBLE PRECISION DEFAULT NULL, CHANGE gps_lng gps_lng DOUBLE PRECISION DEFAULT NULL, CHANGE rejection_reason rejection_reason VARCHAR(100) DEFAULT NULL');
        $this->addSql('ALTER TABLE classe CHANGE description description VARCHAR(255) DEFAULT NULL, CHANGE filiere filiere VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE conversation CHANGE updated_at updated_at DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE groupe_projet CHANGE description description VARCHAR(255) DEFAULT NULL, CHANGE created_at created_at DATETIME DEFAULT NULL, CHANGE updated_at updated_at DATETIME DEFAULT NULL, CHANGE statut statut VARCHAR(255) DEFAULT NULL, CHANGE logo_image_name logo_image_name VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE matiere_classe CHANGE nom nom VARCHAR(255) DEFAULT NULL, CHANGE description description VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE message CHANGE updated_at updated_at DATETIME DEFAULT NULL, CHANGE read_at read_at DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE objectif_sante CHANGE priorite priorite VARCHAR(10) DEFAULT NULL, CHANGE share_token share_token VARCHAR(64) DEFAULT NULL, CHANGE share_expires_at share_expires_at DATETIME DEFAULT NULL, CHANGE archived_at archived_at DATETIME DEFAULT NULL, CHANGE archive_pdf_path archive_pdf_path VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE proposition_reunion CHANGE lieu lieu VARCHAR(255) DEFAULT NULL, CHANGE date_fin_vote date_fin_vote DATETIME DEFAULT NULL, CHANGE created_at created_at DATETIME DEFAULT NULL, CHANGE updated_at updated_at DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE quiz_attempt_detail CHANGE user_answer user_answer VARCHAR(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE quiz_question CHANGE choice_c choice_c VARCHAR(255) DEFAULT NULL, CHANGE choice_d choice_d VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE salle CHANGE updated_at updated_at DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE seance CHANGE created_at created_at DATETIME DEFAULT NULL, CHANGE qr_token qr_token VARCHAR(512) DEFAULT NULL, CHANGE qr_expires_at qr_expires_at DATETIME DEFAULT NULL, CHANGE qr_url qr_url VARCHAR(1024) DEFAULT NULL');
        $this->addSql('ALTER TABLE student_intelligence_profile CHANGE abandonment_rate abandonment_rate DOUBLE PRECISION DEFAULT NULL, CHANGE completion_rate completion_rate DOUBLE PRECISION DEFAULT NULL, CHANGE average_start_delay_minutes average_start_delay_minutes DOUBLE PRECISION DEFAULT NULL, CHANGE average_completion_duration_minutes average_completion_duration_minutes DOUBLE PRECISION DEFAULT NULL, CHANGE pause_frequency pause_frequency DOUBLE PRECISION DEFAULT NULL, CHANGE abandonment_rate_by_type abandonment_rate_by_type JSON DEFAULT NULL, CHANGE completion_rate_by_type completion_rate_by_type JSON DEFAULT NULL, CHANGE average_start_delay_by_type average_start_delay_by_type JSON DEFAULT NULL, CHANGE global_risk_trend global_risk_trend DOUBLE PRECISION DEFAULT NULL, CHANGE forgotten_task_probability forgotten_task_probability DOUBLE PRECISION DEFAULT NULL, CHANGE overdue_probability overdue_probability DOUBLE PRECISION DEFAULT NULL');
        $this->addSql('ALTER TABLE subscription_pack CHANGE features features JSON DEFAULT NULL, CHANGE icon icon VARCHAR(50) DEFAULT NULL, CHANGE color color VARCHAR(20) DEFAULT NULL');
        $this->addSql('ALTER TABLE suivi_bien_etre CHANGE score score DOUBLE PRECISION DEFAULT NULL');
        $this->addSql('ALTER TABLE suivi_tache CHANGE ancien_statut ancien_statut VARCHAR(50) DEFAULT NULL, CHANGE nouveau_statut nouveau_statut VARCHAR(50) DEFAULT NULL');
        $this->addSql('ALTER TABLE tache CHANGE created_at created_at DATETIME DEFAULT NULL, CHANGE date_echeance date_echeance DATE DEFAULT NULL, CHANGE description description VARCHAR(255) DEFAULT NULL, CHANGE updated_at updated_at DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE user CHANGE roles roles JSON NOT NULL, CHANGE num_tel num_tel VARCHAR(20) DEFAULT NULL, CHANGE profile_pic profile_pic VARCHAR(255) DEFAULT NULL, CHANGE created_at created_at DATETIME DEFAULT NULL, CHANGE banned_at banned_at DATETIME DEFAULT NULL, CHANGE verification_token verification_token VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE messenger_messages CHANGE delivered_at delivered_at DATETIME DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE attendance CHANGE scanned_at scanned_at DATETIME DEFAULT \'NULL\', CHANGE device_id device_id VARCHAR(50) DEFAULT \'NULL\', CHANGE gps_lat gps_lat DOUBLE PRECISION DEFAULT \'NULL\', CHANGE gps_lng gps_lng DOUBLE PRECISION DEFAULT \'NULL\', CHANGE rejection_reason rejection_reason VARCHAR(100) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE classe CHANGE description description VARCHAR(255) DEFAULT \'NULL\', CHANGE filiere filiere VARCHAR(255) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE conversation CHANGE updated_at updated_at DATETIME DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE groupe_projet CHANGE description description VARCHAR(255) DEFAULT \'NULL\', CHANGE created_at created_at DATETIME DEFAULT \'NULL\', CHANGE updated_at updated_at DATETIME DEFAULT \'NULL\', CHANGE statut statut VARCHAR(255) DEFAULT \'NULL\', CHANGE logo_image_name logo_image_name VARCHAR(255) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE matiere_classe CHANGE nom nom VARCHAR(255) DEFAULT \'NULL\', CHANGE description description VARCHAR(255) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE message CHANGE updated_at updated_at DATETIME DEFAULT \'NULL\', CHANGE read_at read_at DATETIME DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE messenger_messages CHANGE delivered_at delivered_at DATETIME DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE objectif_sante CHANGE priorite priorite VARCHAR(10) DEFAULT \'NULL\', CHANGE share_token share_token VARCHAR(64) DEFAULT \'NULL\', CHANGE share_expires_at share_expires_at DATETIME DEFAULT \'NULL\', CHANGE archived_at archived_at DATETIME DEFAULT \'NULL\', CHANGE archive_pdf_path archive_pdf_path VARCHAR(255) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE proposition_reunion CHANGE lieu lieu VARCHAR(255) DEFAULT \'NULL\', CHANGE date_fin_vote date_fin_vote DATETIME DEFAULT \'NULL\', CHANGE created_at created_at DATETIME DEFAULT \'NULL\', CHANGE updated_at updated_at DATETIME DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE quiz_attempt_detail CHANGE user_answer user_answer VARCHAR(1) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE quiz_question CHANGE choice_c choice_c VARCHAR(255) DEFAULT \'NULL\', CHANGE choice_d choice_d VARCHAR(255) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE salle CHANGE updated_at updated_at DATETIME DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE seance CHANGE created_at created_at DATETIME DEFAULT \'NULL\', CHANGE qr_token qr_token VARCHAR(512) DEFAULT \'NULL\', CHANGE qr_expires_at qr_expires_at DATETIME DEFAULT \'NULL\', CHANGE qr_url qr_url VARCHAR(1024) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE student_intelligence_profile CHANGE abandonment_rate abandonment_rate DOUBLE PRECISION DEFAULT \'NULL\', CHANGE completion_rate completion_rate DOUBLE PRECISION DEFAULT \'NULL\', CHANGE average_start_delay_minutes average_start_delay_minutes DOUBLE PRECISION DEFAULT \'NULL\', CHANGE average_completion_duration_minutes average_completion_duration_minutes DOUBLE PRECISION DEFAULT \'NULL\', CHANGE pause_frequency pause_frequency DOUBLE PRECISION DEFAULT \'NULL\', CHANGE abandonment_rate_by_type abandonment_rate_by_type LONGTEXT DEFAULT NULL COLLATE `utf8mb4_bin`, CHANGE completion_rate_by_type completion_rate_by_type LONGTEXT DEFAULT NULL COLLATE `utf8mb4_bin`, CHANGE average_start_delay_by_type average_start_delay_by_type LONGTEXT DEFAULT NULL COLLATE `utf8mb4_bin`, CHANGE global_risk_trend global_risk_trend DOUBLE PRECISION DEFAULT \'NULL\', CHANGE forgotten_task_probability forgotten_task_probability DOUBLE PRECISION DEFAULT \'NULL\', CHANGE overdue_probability overdue_probability DOUBLE PRECISION DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE subscription_pack CHANGE features features LONGTEXT DEFAULT NULL COLLATE `utf8mb4_bin`, CHANGE icon icon VARCHAR(50) DEFAULT \'NULL\', CHANGE color color VARCHAR(20) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE suivi_bien_etre CHANGE score score DOUBLE PRECISION DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE suivi_tache CHANGE ancien_statut ancien_statut VARCHAR(50) DEFAULT \'NULL\', CHANGE nouveau_statut nouveau_statut VARCHAR(50) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE tache CHANGE created_at created_at DATETIME DEFAULT \'NULL\', CHANGE date_echeance date_echeance DATE DEFAULT \'NULL\', CHANGE description description VARCHAR(255) DEFAULT \'NULL\', CHANGE updated_at updated_at DATETIME DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE `user` CHANGE roles roles LONGTEXT NOT NULL COLLATE `utf8mb4_bin`, CHANGE num_tel num_tel VARCHAR(20) DEFAULT \'NULL\', CHANGE profile_pic profile_pic VARCHAR(255) DEFAULT \'NULL\', CHANGE created_at created_at DATETIME DEFAULT \'NULL\', CHANGE banned_at banned_at DATETIME DEFAULT \'NULL\', CHANGE verification_token verification_token VARCHAR(255) DEFAULT \'NULL\'');
    }
}
