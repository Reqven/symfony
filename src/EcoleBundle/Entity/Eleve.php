<?php

namespace EcoleBundle\Entity;

/**
 * Eleve
 */
class Eleve
{
    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $prenom;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \EcoleBundle\Entity\Places
     */
    private $idPlaces;


    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Eleve
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
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Eleve
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
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
     * Set idPlaces
     *
     * @param \EcoleBundle\Entity\Places $idPlaces
     *
     * @return Eleve
     */
    public function setIdPlaces(\EcoleBundle\Entity\Places $idPlaces = null)
    {
        $this->idPlaces = $idPlaces;

        return $this;
    }

    /**
     * Get idPlaces
     *
     * @return \EcoleBundle\Entity\Places
     */
    public function getIdPlaces()
    {
        return $this->idPlaces;
    }
}
