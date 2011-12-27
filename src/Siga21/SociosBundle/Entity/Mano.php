<?php

namespace Siga21\SociosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Siga21\SociosBundle\Entity\Mano
 */
class Mano
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $Nombre
     */
    private $Nombre;

    /**
     * @var string $Especialidad
     */
    private $Especialidad;

    /**
     * @var datetime $Fecha_De_Nacimiento
     */
    private $Fecha_De_Nacimiento;
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
     * Set Especialidad
     *
     * @param string $especialidad
     */
    public function setEspecialidad($especialidad)
    {
        $this->Especialidad = $especialidad;
    }

    /**
     * Get Especialidad
     *
     * @return string 
     */
    public function getEspecialidad()
    {
        return $this->Especialidad;
    }

    /**
     * Set Fecha_De_Nacimiento
     *
     * @param datetime $fechaDeNacimiento
     */
    public function setFechaDeNacimiento($fechaDeNacimiento)
    {
        $this->Fecha_De_Nacimiento = $fechaDeNacimiento;
    }

    /**
     * Get Fecha_De_Nacimiento
     *
     * @return datetime 
     */
    public function getFechaDeNacimiento()
    {
        return $this->Fecha_De_Nacimiento;
    }
}
