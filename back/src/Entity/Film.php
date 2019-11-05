<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use phpDocumentor\Reflection\Types\Boolean;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FilmRepository")
 */
class Film
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id_film;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titre;

    /**
     * @ORM\Column(type="string", length=300)
     */
    private $resum;

    /**
     * @ORM\Column(type="date")
     */
    private $date_debut_affiche;

    /**
     * @ORM\Column(type="date")
     */
    private $date_fin_affiche;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $duree_min;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $annee_prod;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_genre;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_distrib;

//    /**
//     * @ORM\OneToMany(targetEntity="App\Entity\HistoriqueMembre", mappedBy="relation")
//     */
//    private $historiqueMembres;

    public function __construct()
    {
        $this->historiqueMembres = new ArrayCollection();
    }

    public function getIdFilm(): ?int
    {
        return $this->id_film;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

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

    public function getDateDebutAffiche(): ?\DateTimeInterface
    {
        return $this->date_debut_affiche;
    }

    public function setDateDebutAffiche(\DateTimeInterface $date_debut_affiche): self
    {
        $this->date_debut_affiche = $date_debut_affiche;

        return $this;
    }

    public function getDateFinAffiche(): ?\DateTimeInterface
    {
        return $this->date_fin_affiche;
    }

    public function setDateFinAffiche(\DateTimeInterface $date_fin_affiche): self
    {
        $this->date_fin_affiche = $date_fin_affiche;

        return $this;
    }

    public function getDureeMin(): ?int
    {
        return $this->duree_min;
    }

    public function setDureeMin(?int $duree_min): self
    {
        $this->duree_min = $duree_min;

        return $this;
    }

    public function getAnneeProd(): ?int
    {
        return $this->annee_prod;
    }

    public function setAnneeProd(?int $annee_prod): self
    {
        $this->annee_prod = $annee_prod;

        return $this;
    }

    public function getIdGenre(): ?int
    {
        return $this->id_genre;
    }

    public function setIdGenre(int $id_genre): self
    {
        $this->id_genre = $id_genre;

        return $this;
    }

    public function getIdDistrib(): ?int
    {
        return $this->id_distrib;
    }

    public function setIdDistrib(int $id_distrib): self
    {
        $this->id_distrib = $id_distrib;

        return $this;
    }

//    /**
//     * @return Collection|HistoriqueMembre[]
//     */
//    public function getHistoriqueMembres(): Collection
//    {
//        return $this->historiqueMembres;
//    }
//
//    public function addHistoriqueMembre(HistoriqueMembre $historiqueMembre): self
//    {
//        if (!$this->historiqueMembres->contains($historiqueMembre)) {
//            $this->historiqueMembres[] = $historiqueMembre;
//            $historiqueMembre->setRelation($this);
//        }
//
//        return $this;
//    }
//
//    public function removeHistoriqueMembre(HistoriqueMembre $historiqueMembre): self
//    {
//        if ($this->historiqueMembres->contains($historiqueMembre)) {
//            $this->historiqueMembres->removeElement($historiqueMembre);
//            // set the owning side to null (unless already changed)
//            if ($historiqueMembre->getRelation() === $this) {
//                $historiqueMembre->setRelation(null);
//            }
//        }
//
//        return $this;
//    }
}
