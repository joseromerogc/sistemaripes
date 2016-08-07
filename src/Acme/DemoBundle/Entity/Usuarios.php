<?php

namespace Acme\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuarios
 *
 * @ORM\Table(name="usuarios", uniqueConstraints={@ORM\UniqueConstraint(name="nom_usr", columns={"nom_usr"})})
 * @ORM\Entity
 */
class Usuarios
{
    /**
     * @var string
     *
     * @ORM\Column(name="nom_usr", type="string", length=30, nullable=false)
     */
    private $nomUsr;

    /**
     * @var string
     *
     * @ORM\Column(name="psw_usr", type="string", length=60, nullable=false)
     */
    private $pswUsr;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_usr", type="string", length=20, nullable=false)
     */
    private $tipoUsr;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_usr", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUsr;



    /**
     * Set nomUsr
     *
     * @param string $nomUsr
     * @return Usuarios
     */
    public function setNomUsr($nomUsr)
    {
        $this->nomUsr = $nomUsr;

        return $this;
    }

    /**
     * Get nomUsr
     *
     * @return string 
     */
    public function getNomUsr()
    {
        return $this->nomUsr;
    }

    /**
     * Set pswUsr
     *
     * @param string $pswUsr
     * @return Usuarios
     */
    public function setPswUsr($pswUsr)
    {
        $this->pswUsr = $pswUsr;

        return $this;
    }

    /**
     * Get pswUsr
     *
     * @return string 
     */
    public function getPswUsr()
    {
        return $this->pswUsr;
    }

    /**
     * Set tipoUsr
     *
     * @param string $tipoUsr
     * @return Usuarios
     */
    public function setTipoUsr($tipoUsr)
    {
        $this->tipoUsr = $tipoUsr;

        return $this;
    }

    /**
     * Get tipoUsr
     *
     * @return string 
     */
    public function getTipoUsr()
    {
        return $this->tipoUsr;
    }

    /**
     * Get idUsr
     *
     * @return integer 
     */
    public function getIdUsr()
    {
        return $this->idUsr;
    }
}
