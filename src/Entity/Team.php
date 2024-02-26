<?php

namespace App\Entity;

use App\Repository\TeamRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TeamRepository::class)]
class Team
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column]
    private ?int $match_played = null;

    #[ORM\Column(nullable: true)]
    private ?int $win = null;

    #[ORM\Column(nullable: true)]
    private ?int $lose = null;

    #[ORM\Column(length: 255)]
    private ?string $category = null;

    #[ORM\Column]
    private ?int $points = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getMatchPlayed(): ?int
    {
        return $this->match_played;
    }

    public function setMatchPlayed(int $match_played): static
    {
        $this->match_played = $match_played;

        return $this;
    }

    public function getWin(): ?int
    {
        return $this->win;
    }

    public function setWin(?int $win): static
    {
        $this->win = $win;

        return $this;
    }

    public function getLose(): ?int
    {
        return $this->lose;
    }

    public function setLose(?int $lose): static
    {
        $this->lose = $lose;

        return $this;
    }

    public function getCategory(): ?string
    {
        return $this->category;
    }

    public function setCategory(string $category): static
    {
        $this->category = $category;

        return $this;
    }

    public function getPoints(): ?int
    {
        return $this->points;
    }

    public function setPoints(int $points): static
    {
        $this->points = $points;

        return $this;
    }
}
