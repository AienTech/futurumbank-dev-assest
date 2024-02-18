<?php

namespace App\Entity;

use App\Repository\TransactionRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TransactionRepository::class)]
class Transaction
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, unique: true)]
    private ?string $hash = null;

    #[ORM\Column(type: Types::BIGINT)]
    private ?string $height = null;

    #[ORM\Column(type: Types::BIGINT)]
    private ?string $value = null;

    #[ORM\Column]
    private ?int $confirmations = null;

    #[ORM\Column(type: Types::DATETIMETZ_MUTABLE)]
    private ?\DateTimeInterface $confirmed = null;

    #[ORM\ManyToOne(
        targetEntity: Address::class,
    )]
    #[ORM\JoinColumn(name: 'address_id', referencedColumnName: 'id', nullable: false)]
    private ?Address $address = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getHash(): ?string
    {
        return $this->hash;
    }

    public function setHash(string $hash): static
    {
        $this->hash = $hash;

        return $this;
    }

    public function getHeight(): ?string
    {
        return $this->height;
    }

    public function setHeight(string $height): static
    {
        $this->height = $height;

        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(string $value): static
    {
        $this->value = $value;

        return $this;
    }

    public function getConfirmations(): ?int
    {
        return $this->confirmations;
    }

    public function setConfirmations(int $confirmations): static
    {
        $this->confirmations = $confirmations;

        return $this;
    }

    public function getConfirmed(): ?\DateTimeInterface
    {
        return $this->confirmed;
    }

    public function setConfirmed(\DateTimeInterface $confirmed): static
    {
        $this->confirmed = $confirmed;

        return $this;
    }

    public function getAddress(): ?Address
    {
        return $this->address;
    }

    public function setAddress(?Address $address): static
    {
        $this->address = $address;

        return $this;
    }
}
