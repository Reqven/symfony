<?php

namespace EcoleBundle\Entity;

use EcoleBundle\Entity\Places;

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
     * @var \EcoleBundle\Entity\Intervenant
     */
    private $idIntervenant;


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

