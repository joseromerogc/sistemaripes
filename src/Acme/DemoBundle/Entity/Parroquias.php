<?php

namespace Acme\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Parroquias
 *
 * @ORM\Table(name="parroquias", indexes={@ORM\Index(name="id_municipio", columns={"id_municipio"})})
 * @ORM\Entity
 */
class Parroquias
{
    /**
     * @var string
     *
     * @ORM\Column(name="parroquia", type="string", length=250, nullable=false)
     */
    private $parroquia;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_parroquia", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idParroquia;

    /**
     * @var \Acme\DemoBundle\Entity\Municipios
     *
     * @ORM\ManyToOne(targetEntity="Acme\DemoBundle\Entity\Municipios")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_municipio", referencedColumnName="id_municipio")
     * })
     */
    private $idMunicipio;



    /**
     * Set parroquia
     *
     * @param string $parroquia
     * @return Parroquias
     */
    public function setParroquia($parroquia)
    {
        $this->parroquia = $parroquia;

        return $this;
    }

    /**
     * Get parroquia
     *
     * @return string 
     */
    public function getParroquia()
    {
        return $this->parroquia;
    }

    /**
     * Get idParroquia
     *
     * @return integer 
     */
    public function getIdParroquia()
    {
        return $this->idParroquia;
    }

    /**
     * Set idMunicipio
     *
     * @param \Acme\DemoBundle\Entity\Municipios $idMunicipio
     * @return Parroquias
     */
    public function setIdMunicipio(\Acme\DemoBundle\Entity\Municipios $idMunicipio = null)
    {
        $this->idMunicipio = $idMunicipio;

        return $this;
    }

    /**
     * Get idMunicipio
     *
     * @return \Acme\DemoBundle\Entity\Municipios 
     */
    public function getIdMunicipio()
    {
        return $this->idMunicipio;
    }
}
