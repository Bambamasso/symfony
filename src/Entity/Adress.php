<?php

namespace App\Entity;

use App\Repository\AdressRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AdressRepository::class)]
class Adress
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $streep = null;

    #[ORM\Column(length: 255)]
    private ?string $code_postale = null;

    #[ORM\Column(length: 255)]
    private ?string $city = null;

    #[ORM\Column(length: 255)]
    private ?string $country = null;

    #[ORM\ManyToOne(inversedBy: 'adresses')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $user = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $creatrAt = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $updatedAT = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStreep(): ?string
    {
        return $this->streep;
    }

    public function setStreep(string $streep): static
    {
        $this->streep = $streep;

        return $this;
    }

    public function getCodePostale(): ?string
    {
        return $this->code_postale;
    }

    public function setCodePostale(string $code_postale): static
    {
        $this->code_postale = $code_postale;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): static
    {
        $this->city = $city;

        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(string $country): static
    {
        $this->country = $country;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): static
    {
        $this->user = $user;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->creatrAt;
    }

    public function setCreatedAt(\DateTimeImmutable $creatrAt): static
    {
        $this->creatrAt = $creatrAt;

        return $this;
    }

    public function getUpdatedAT(): ?\DateTimeImmutable
    {
        return $this->updatedAT;
    }

    public function setUpdatedAT(?\DateTimeImmutable $updatedAT): static
    {
        $this->updatedAT = $updatedAT;

        return $this;
    }
}
