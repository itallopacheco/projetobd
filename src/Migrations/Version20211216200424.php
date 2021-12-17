<?php

declare(strict_types=1);

namespace MyProject\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211216200424 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE Categoria (id INT NOT NULL, nome VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE categoria_produto (categoria_id INT NOT NULL, produto_id INT NOT NULL, PRIMARY KEY(categoria_id, produto_id))');
        $this->addSql('CREATE INDEX IDX_5EC3B6793397707A ON categoria_produto (categoria_id)');
        $this->addSql('CREATE INDEX IDX_5EC3B679105CFD56 ON categoria_produto (produto_id)');
        $this->addSql('CREATE TABLE Produto (id INT NOT NULL, nome VARCHAR(255) NOT NULL, especializacao VARCHAR(255) NOT NULL, status VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('ALTER TABLE categoria_produto ADD CONSTRAINT FK_5EC3B6793397707A FOREIGN KEY (categoria_id) REFERENCES Categoria (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE categoria_produto ADD CONSTRAINT FK_5EC3B679105CFD56 FOREIGN KEY (produto_id) REFERENCES Produto (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE categoria_produto DROP CONSTRAINT FK_5EC3B6793397707A');
        $this->addSql('ALTER TABLE categoria_produto DROP CONSTRAINT FK_5EC3B679105CFD56');
        $this->addSql('DROP TABLE Categoria');
        $this->addSql('DROP TABLE categoria_produto');
        $this->addSql('DROP TABLE Produto');
    }
}
