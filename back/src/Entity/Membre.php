<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MembreRepository")
 */
class Membre
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id_membre;


    /**
     * @ORM\Column(type="integer")
     */
    private $id_fiche_perso;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $id_abo;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $date_abo;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $id_dernier_film;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $date_dernier_film;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $date_inscription;

    public function getIdMembre(): ?int
    {
        return $this->id_membre;
    }

    public function getIdFichePerso(): ?int
    {
        return $this->id_fiche_perso;
    }

    public function setIdFichePerso(int $id_fiche_perso): self
    {
        $this->id_fiche_perso = $id_fiche_perso;

        return $this;
    }

    public function getIdAbo(): ?int
    {
        return $this->id_abo;
    }

    public function setIdAbo(?int $id_abo): self
    {
        $this->id_abo = $id_abo;

        return $this;
    }

    public function getDateAbo(): ?\DateTimeInterface
    {
        return $this->date_abo;
    }

    public function setDateAbo(?\DateTimeInterface $date_abo): self
    {
        $this->date_abo = $date_abo;

        return $this;
    }

    public function getIdDernierFilm(): ?int
    {
        return $this->id_dernier_film;
    }

    public function setIdDernierFilm(?int $id_dernier_film): self
    {
        $this->id_dernier_film = $id_dernier_film;

        return $this;
    }

    public function getDateDernierFilm(): ?int
    {
        return $this->date_dernier_film;
    }

    public function setDateDernierFilm(?int $date_dernier_film): self
    {
        $this->date_dernier_film = $date_dernier_film;

        return $this;
    }

    public function getDateInscription(): ?\DateTimeInterface
    {
        return $this->date_inscription;
    }

    public function setDateInscription(?\DateTimeInterface $date_inscription): self
    {
        $this->date_inscription = $date_inscription;

        return $this;
    }


}
