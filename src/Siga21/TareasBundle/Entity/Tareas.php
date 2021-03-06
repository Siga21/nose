<?php

namespace Siga21\TareasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * Siga21\TareasBundle\Entity\Tareas
 *
 * @ORM\Table()
 * @ORM\Entity
 */


/**
  * @ORM\Entity(repositoryClass="Siga21\TareasBundle\Entity\TareasRepository")
  */

class Tareas
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

   /**
     * @var string $Nombre
     *
     * @ORM\Column(name="Nombre", type="string", length=25)
     */
    private $Nombre;

    /**
     * @var datetime $Fecha
     *
     * @ORM\Column(name="Fecha", type="datetime")
     */
    private $Fecha;

   /** 
     * @ORM\ManyToOne(targetEntity="Siga21\AsociadosBundle\Entity\Asociados") 
     */
    private $socios;

    /**
     * @var string $Notas
     *
     * @ORM\Column(name="Notas", type="string", length=255)
     
     */
    private $Notas;

    /**
     * @var boolean $Terminada
     *
     * @ORM\Column(name="Terminada", type="boolean")
     */
    private $Terminada;


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
     * Set Nombre
     *
     * @param string $nombre
     */
    public function setNombre($nombre)
    {
        $this->Nombre = $nombre;
    }

    /**
     * Get Nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->Nombre;
    }

    /**
     * Set Fecha
     *
     * @param datetime $fecha
     */
    public function setFecha($fecha)
    {
        $this->Fecha = $fecha;
    }

    /**
     * Get Fecha
     *
     * @return datetime 
     */
    public function getFecha()
    {
        return $this->Fecha;
    }

    /**
     * Set Notas
     *
     * @param string $notas
     */
    public function setNotas($notas)
    {
        $this->Notas = $notas;
    }

    /**
     * Get Notas
     *
     * @return string 
     */
    public function getNotas()
    {
        return $this->Notas;
    }

    /**
     * Set Terminada
     *
     * @param boolean $terminada
     */
    public function setTerminada($terminada)
    {
        $this->Terminada = $terminada;
    }

    /**
     * Get Terminada
     *
     * @return boolean 
     */
    public function getTerminada()
    {
        return $this->Terminada;
    }

    /**
     * Set socios
     *
     * @param Siga21\AsociadosBundle\Entity\Asociados $socios
     */
    public function setSocios(\Siga21\AsociadosBundle\Entity\Asociados $socios)
    {
        $this->socios = $socios;
    }

    /**
     * Get socios
     *
     * @return Siga21\AsociadosBundle\Entity\Asociados 
     */
    public function getSocios()
    {
        return $this->socios;
    }
   
}