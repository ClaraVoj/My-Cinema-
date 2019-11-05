<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\HistoriqueMembreRepository")
 */
class HistoriqueMembre
{
    /**
     * @ORM\Id()
     * @ORM\Column(type="integer")
     */
    private $id_membre;

    /**
     * @ORM\Id()
     * @ORM\Column(type="integer")
     */
    private $id_film;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $avis;

    public function getIdMembre(): ?int
    {
        return $this->id_membre;
    }
    public function setIdMembre(int $id_membre): self
    {
        $this->id_membre = $id_membre;

        return $this;
    }


    public function getIdFilm(): ?int
    {
        return $this->id_film;
    }

    public function setIdFilm(int $id_film): self
    {
        $this->id_film = $id_film;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getAvis(): ?string
    {
        return $this->avis;
    }

    public function setAvis(?string $avis): self
    {
        $this->avis = $avis;

        return $this;
    }
}
