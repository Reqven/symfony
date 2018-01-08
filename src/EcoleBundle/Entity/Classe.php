<?php

namespace EcoleBundle\Entity;

/**
 * Classe
 */
class Classe
{
    /**
     * @var string
     */
    private $nom;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $idPlaces;

    /**
     * @var \EcoleBundle\Entity\Intervenant
     */
    private $idIntervenant;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idPlaces = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Classe
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Add idPlace
     *
     * @param \EcoleBundle\Entity\Places $idPlace
     *
     * @return Classe
     */
    public function addIdPlace(\EcoleBundle\Entity\Places $idPlace)
    {
        $this->idPlaces[] = $idPlace;

        return $this;
    }

    /**
     * Remove idPlace
     *
     * @param \EcoleBundle\Entity\Places $idPlace
     */
    public function removeIdPlace(\EcoleBundle\Entity\Places $idPlace)
    {
        $this->idPlaces->removeElement($idPlace);
    }

    /**
     * Get idPlaces
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdPlaces()
    {
        return $this->idPlaces;
    }

    /**
     * Set idIntervenant
     *
     * @param \EcoleBundle\Entity\Intervenant $idIntervenant
     *
     * @return Classe
     */
    public function setIdIntervenant(\EcoleBundle\Entity\Intervenant $idIntervenant = null)
    {
        $this->idIntervenant = $idIntervenant;

        return $this;
    }

    /**
     * Get idIntervenant
     *
     * @return \EcoleBundle\Entity\Intervenant
     */
    public function getIdIntervenant()
    {
        return $this->idIntervenant;
    }
}

