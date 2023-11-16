<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231115113210 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE classes DROP id_classe');
        $this->addSql('ALTER TABLE cours DROP id_cour');
        $this->addSql('ALTER TABLE edt DROP id_edt');
        $this->addSql('ALTER TABLE eleves DROP id_eleve');
        $this->addSql('ALTER TABLE enseignant_classe DROP id_enseignant_classe');
        $this->addSql('ALTER TABLE enseignants DROP id_enseignant');
        $this->addSql('ALTER TABLE matieres DROP id_matiere');
        $this->addSql('ALTER TABLE messenger_messages CHANGE delivered_at delivered_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\'');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE classes ADD id_classe INT NOT NULL');
        $this->addSql('ALTER TABLE cours ADD id_cour INT NOT NULL');
        $this->addSql('ALTER TABLE edt ADD id_edt INT NOT NULL');
        $this->addSql('ALTER TABLE eleves ADD id_eleve INT NOT NULL');
        $this->addSql('ALTER TABLE enseignant_classe ADD id_enseignant_classe INT NOT NULL');
        $this->addSql('ALTER TABLE enseignants ADD id_enseignant INT NOT NULL');
        $this->addSql('ALTER TABLE matieres ADD id_matiere INT NOT NULL');
        $this->addSql('ALTER TABLE messenger_messages CHANGE delivered_at delivered_at DATETIME DEFAULT \'NULL\' COMMENT \'(DC2Type:datetime_immutable)\'');
    }
}
