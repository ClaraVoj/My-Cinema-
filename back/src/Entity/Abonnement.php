<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AbonnementRepository")
 */
class Abonnement
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id_abo;

    /**
     * @ORM\Column(type="integer")

    private $id_abo;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $resum;

    /**
     * @ORM\Column(type="integer")
     */
    private $prix;

    /**
     * @ORM\Column(type="smallint")
     */
    private $duree_abo;

    public function getIdAbo(): ?int
    {
        return $this->id_abo;
    }

    public function setIdAbo(int $id_abo): self
    {
        $this->id_abo = $id_abo;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getResum(): ?string
    {
        return $this->resum;
    }

    public function setResum(string $resum): self
    {
        $this->resum = $resum;

        return $this;
    }

    public function getPrix(): ?int
    {
        return $this->prix;
    }

    public function setPrix(int $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getDureeAbo(): ?int
    {
        return $this->duree_abo;
    }

    public function setDureeAbo(int $duree_abo): self
    {
        $this->duree_abo = $duree_abo;

        return $this;
    }
}
