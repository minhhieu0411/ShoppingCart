<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221224013210 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE `order` CHANGE created_at create_at DATETIME NOT NULL');
        $this->addSql('ALTER TABLE order_item ADD ref_order_id INT NOT NULL');
        $this->addSql('ALTER TABLE order_item ADD CONSTRAINT FK_52EA1F09B88ABBF FOREIGN KEY (ref_order_id) REFERENCES `order` (id)');
        $this->addSql('CREATE INDEX IDX_52EA1F09B88ABBF ON order_item (ref_order_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE `order` CHANGE create_at created_at DATETIME NOT NULL');
        $this->addSql('ALTER TABLE order_item DROP FOREIGN KEY FK_52EA1F09B88ABBF');
        $this->addSql('DROP INDEX IDX_52EA1F09B88ABBF ON order_item');
        $this->addSql('ALTER TABLE order_item DROP ref_order_id');
    }
}
