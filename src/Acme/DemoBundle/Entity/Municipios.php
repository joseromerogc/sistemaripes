<?php

namespace Acme\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Municipios
 *
 * @ORM\Table(name="municipios", indexes={@ORM\Index(name="id_estado", columns={"id_estado"})})
 * @ORM\Entity
 */
class Municipios
{
    /**
     * @var string
     *
     * @ORM\Column(name="municipio", type="string", length=100, nullable=false)
     */
    private $municipio;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_municipio", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMunicipio;

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
     * Set municipio
     *
     * @param string $municipio
     * @return Municipios
     */
    public function setMunicipio($municipio)
    {
        $this->municipio = $municipio;

        return $this;
    }

    /**
     * Get municipio
     *
     * @return string 
     */
    public function getMunicipio()
    {
        return $this->municipio;
    }

    /**
     * Get idMunicipio
     *
     * @return integer 
     */
    public function getIdMunicipio()
    {
        return $this->idMunicipio;
    }

    /**
     * Set idEstado
     *
     * @param \Acme\DemoBundle\Entity\Estados $idEstado
     * @return Municipios
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
