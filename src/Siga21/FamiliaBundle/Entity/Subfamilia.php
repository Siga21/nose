<?php

namespace Siga21\FamiliaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Siga21\FamiliaBundle\Entity\Subfamilia
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Siga21\FamiliaBundle\Entity\SubfamiliaRepository")
 */
class Subfamilia
{
    /**
     * @var string $codigo
     *
     * @ORM\Column(name="codigo", type="string", length=2)
     * @ORM\Id
     */
    private $codigo;

    /**
     * @var string $descripcion
     *
     * @ORM\Column(name="descripcion", type="string", length=100)
     */
    private $descripcion;


    /**
     * Get codigo
     *
     * @return string 
     */
    public function getCodigo()
    {
        return $this->codigo;
    }
   /**
     * Set codigo
     *
     * @param string $codigo 
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }


    /**
     * Set descripcion
     *
     * @param string $descripcion
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }
}
