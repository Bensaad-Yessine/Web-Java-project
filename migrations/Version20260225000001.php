<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20260225000001 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Add attendance table and QR token fields to seance';
    }

    public function up(Schema $schema): void
    {
        // Table attendance
        $this->addSql('CREATE TABLE IF NOT EXISTS attendance (
            id INT AUTO_INCREMENT NOT NULL,
            seance_id INT NOT NULL,
            student_id INT NOT NULL,
            status VARCHAR(20) NOT NULL,
            scanned_at DATETIME DEFAULT NULL,
            device_id VARCHAR(50) DEFAULT NULL,
            gps_lat DOUBLE PRECISION DEFAULT NULL,
            gps_lng DOUBLE PRECISION DEFAULT NULL,
            minutes_late INT DEFAULT NULL,
            rejection_reason VARCHAR(100) DEFAULT NULL,
            created_at DATETIME NOT NULL,
            INDEX IDX_6DE30D91E3797A94 (seance_id),
            INDEX IDX_6DE30D91CB944F1A (student_id),
            UNIQUE INDEX unique_attendance (seance_id, student_id),
            PRIMARY KEY (id)
        ) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');

        $this->addSql('ALTER TABLE attendance
            ADD CONSTRAINT FK_6DE30D91E3797A94 FOREIGN KEY (seance_id) REFERENCES seance (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE attendance
            ADD CONSTRAINT FK_6DE30D91CB944F1A FOREIGN KEY (student_id) REFERENCES `user` (id) ON DELETE CASCADE');

        // Colonnes QR sur seance
        $this->addSql('ALTER TABLE seance
            ADD qr_token VARCHAR(512) DEFAULT NULL,
            ADD qr_expires_at DATETIME DEFAULT NULL,
            ADD qr_url VARCHAR(1024) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE attendance DROP FOREIGN KEY FK_6DE30D91E3797A94');
        $this->addSql('ALTER TABLE attendance DROP FOREIGN KEY FK_6DE30D91CB944F1A');
        $this->addSql('DROP TABLE IF EXISTS attendance');
        $this->addSql('ALTER TABLE seance DROP COLUMN qr_token, DROP COLUMN qr_expires_at, DROP COLUMN qr_url');
    }
}
