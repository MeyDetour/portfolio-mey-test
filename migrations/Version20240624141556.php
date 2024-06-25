<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240624141556 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE certification_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE last_project_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE projectt_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE quality_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE social_media_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE text_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE certification (id INT NOT NULL, title TEXT NOT NULL, description TEXT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE last_project (id INT NOT NULL, name TEXT NOT NULL, description TEXT NOT NULL, objectifs TEXT NOT NULL, technology TEXT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE projectt (id INT NOT NULL, image_id INT NOT NULL, name TEXT NOT NULL, description TEXT NOT NULL, link TEXT DEFAULT NULL, step1 TEXT DEFAULT NULL, step2 TEXT DEFAULT NULL, step3 TEXT DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_C2F726073DA5256D ON projectt (image_id)');
        $this->addSql('CREATE TABLE quality (id INT NOT NULL, name TEXT NOT NULL, description TEXT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE media (id INT NOT NULL, image_id INT NOT NULL, link TEXT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_20BC159E3DA5256D ON media (image_id)');
        $this->addSql('CREATE TABLE text (id INT NOT NULL, home_page_description TEXT NOT NULL, about_description TEXT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('ALTER TABLE projectt ADD CONSTRAINT FK_C2F726073DA5256D FOREIGN KEY (image_id) REFERENCES image (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE media ADD CONSTRAINT FK_20BC159E3DA5256D FOREIGN KEY (image_id) REFERENCES image (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE certification_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE last_project_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE projectt_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE quality_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE social_media_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE text_id_seq CASCADE');
        $this->addSql('ALTER TABLE projectt DROP CONSTRAINT FK_C2F726073DA5256D');
        $this->addSql('ALTER TABLE media DROP CONSTRAINT FK_20BC159E3DA5256D');
        $this->addSql('DROP TABLE certification');
        $this->addSql('DROP TABLE last_project');
        $this->addSql('DROP TABLE projectt');
        $this->addSql('DROP TABLE quality');
        $this->addSql('DROP TABLE media');
        $this->addSql('DROP TABLE text');
    }
}
