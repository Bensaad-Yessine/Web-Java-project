<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20260225190000 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Create quiz_question table for per-matiere quizzes';
    }

    public function up(Schema $schema): void
    {
        // Création de la table quiz_question
        $this->addSql('CREATE TABLE quiz_question (id INT AUTO_INCREMENT NOT NULL, matiere_id INT NOT NULL, question VARCHAR(255) NOT NULL, choice_a VARCHAR(255) NOT NULL, choice_b VARCHAR(255) NOT NULL, choice_c VARCHAR(255) DEFAULT NULL, choice_d VARCHAR(255) DEFAULT NULL, correct_choice VARCHAR(1) NOT NULL, explanation LONGTEXT DEFAULT NULL, INDEX IDX_QUIZ_MATIERE (matiere_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE quiz_question ADD CONSTRAINT FK_QUIZ_MATIERE FOREIGN KEY (matiere_id) REFERENCES matiere_classe (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE quiz_question DROP FOREIGN KEY FK_QUIZ_MATIERE');
        $this->addSql('DROP TABLE quiz_question');
    }
}
