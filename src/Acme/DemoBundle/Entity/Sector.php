<?php

namespace Acme\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sector
 *
 * @ORM\Table(name="sector")
 * @ORM\Entity
 */
class Sector
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_par", type="integer", nullable=false)
     */
    private $idPar;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_sec", type="string", length=40, nullable=false)
     */
    private $nomSec;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_sec", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSec;



    /**
     * Set idPar
     *
     * @param integer $idPar
     * @return Sector
     */
    public function setIdPar($idPar)
    {
        $this->idPar = $idPar;

        return $this;
    }

    /**
     * Get idPar
     *
     * @return integer 
     */
    public function getIdPar()
    {
        return $this->idPar;
    }

    /**
     * Set nomSec
     *
     * @param string $nomSec
     * @return Sector
     */
    public function setNomSec($nomSec)
    {
        $this->nomSec = $nomSec;

        return $this;
    }

    /**
     * Get nomSec
     *
     * @return string 
     */
    public function getNomSec()
    {
        return $this->nomSec;
    }

    /**
     * Get idSec
     *
     * @return integer 
     */
    public function getIdSec()
    {
        return $this->idSec;
    }
}
