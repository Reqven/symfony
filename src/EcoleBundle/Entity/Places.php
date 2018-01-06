<?php

namespace EcoleBundle\Entity;

/**
 * Places
 */
class Places
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \EcoleBundle\Entity\Eleve
     */
    private $idEleve;

    /**
     * @var \EcoleBundle\Entity\Classe
     */
    private $idClasse;


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
     * Set idEleve
     *
     * @param \EcoleBundle\Entity\Eleve $idEleve
     *
     * @return Places
     */
    public function setIdEleve(\EcoleBundle\Entity\Eleve $idEleve = null)
    {
        $this->idEleve = $idEleve;

        return $this;
    }

    /**
     * Get idEleve
     *
     * @return \EcoleBundle\Entity\Eleve
     */
    public function getIdEleve()
    {
        return $this->idEleve;
    }

    /**
     * Set idClasse
     *
     * @param \EcoleBundle\Entity\Classe $idClasse
     *
     * @return Places
     */
    public function setIdClasse(\EcoleBundle\Entity\Classe $idClasse = null)
    {
        $this->idClasse = $idClasse;

        return $this;
    }

    /**
     * Get idClasse
     *
     * @return \EcoleBundle\Entity\Classe
     */
    public function getIdClasse()
    {
        return $this->idClasse;
    }
}

