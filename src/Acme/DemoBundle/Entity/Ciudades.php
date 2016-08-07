<?php

namespace Acme\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ciudades
 *
 * @ORM\Table(name="ciudades", indexes={@ORM\Index(name="id_estado", columns={"id_estado"})})
 * @ORM\Entity
 */
class Ciudades
{
    /**
     * @var string
     *
     * @ORM\Column(name="ciudad", type="string", length=200, nullable=false)
     */
    private $ciudad;

    /**
     * @var boolean
     *
     * @ORM\Column(name="capital", type="boolean", nullable=false)
     */
    private $capital;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_ciudad", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCiudad;

    /**
     * @var \Acme\DemoBundle\Entity\Estados
     *
     * @ORM\ManyToOne(targetEntity="Acme\DemoBundle\Entity\Estados")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_estado", referencedColumnName="id_estado")
     * })
     */
    private $idEstado;



    /**
     * Set ciudad
     *
     * @param string $ciudad
     * @return Ciudades
     */
    public function setCiudad($ciudad)
    {
        $this->ciudad = $ciudad;

        return $this;
    }

    /**
     * Get ciudad
     *
     * @return string 
     */
    public function getCiudad()
    {
        return $this->ciudad;
    }

    /**
     * Set capital
     *
     * @param boolean $capital
     * @return Ciudades
     */
    public function setCapital($capital)
    {
        $this->capital = $capital;

        return $this;
    }

    /**
     * Get capital
     *
     * @return boolean 
     */
    public function getCapital()
    {
        return $this->capital;
    }

    /**
     * Get idCiudad
     *
     * @return integer 
     */
    public function getIdCiudad()
    {
        return $this->idCiudad;
    }

    /**
     * Set idEstado
     *
     * @param \Acme\DemoBundle\Entity\Estados $idEstado
     * @return Ciudades
     */
    public function setIdEstado(\Acme\DemoBundle\Entity\Estados $idEstado = null)
    {
        $this->idEstado = $idEstado;

        return $this;
    }

    /**
     * Get idEstado
     *
     * @return \Acme\DemoBundle\Entity\Estados 
     */
    public function getIdEstado()
    {
        return $this->idEstado;
    }
}
