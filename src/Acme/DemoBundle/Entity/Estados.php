<?php

namespace Acme\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Estados
 *
 * @ORM\Table(name="estados")
 * @ORM\Entity
 */
class Estados
{
    /**
     * @var string
     *
     * @ORM\Column(name="estado", type="string", length=250, nullable=false)
     */
    private $estado;

    /**
     * @var string
     *
     * @ORM\Column(name="iso_3166-2", type="string", length=4, nullable=false)
     */
    private $iso31662;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_estado", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEstado;



    /**
     * Set estado
     *
     * @param string $estado
     * @return Estados
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return string 
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set iso31662
     *
     * @param string $iso31662
     * @return Estados
     */
    public function setIso31662($iso31662)
    {
        $this->iso31662 = $iso31662;

        return $this;
    }

    /**
     * Get iso31662
     *
     * @return string 
     */
    public function getIso31662()
    {
        return $this->iso31662;
    }

    /**
     * Get idEstado
     *
     * @return integer 
     */
    public function getIdEstado()
    {
        return $this->idEstado;
    }
}
