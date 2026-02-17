<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\GizmondoRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: GizmondoRepository::class)]
#[ApiResource]
class Gizmondo
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 30)]
    private ?string $game = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $dev = null;

    #[ORM\ManyToOne(inversedBy: 'gizmondos')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Publisher $publisher_name = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGame(): ?string
    {
        return $this->game;
    }

    public function setGame(string $game): static
    {
        $this->game = $game;

        return $this;
    }

    public function getDev(): ?string
    {
        return $this->dev;
    }

    public function setDev(?string $dev): static
    {
        $this->dev = $dev;

        return $this;
    }

    public function getPublisherName(): ?Publisher
    {
        return $this->publisher_name;
    }

    public function setPublisherName(?Publisher $publisher_name): static
    {
        $this->publisher_name = $publisher_name;

        return $this;
    }
}
