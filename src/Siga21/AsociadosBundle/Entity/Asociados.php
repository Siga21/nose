<?php

namespace Siga21\AsociadosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Siga21\AsociadosBundle\Entity\Asociados
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Asociados
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
     * @var integer $socios
     *
     * @ORM\Column(name="socios", type="integer")
     */
    private $socios;

    /**
     * @var string $nome
     *
     * @ORM\Column(name="nome", type="string", length=255)
     */
    private $nome;


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
     * Set socios
     *
     * @param integer $socios
     */
    public function setSocios($socios)
    {
        $this->socios = $socios;
    }

    /**
     * Get socios
     *
     * @return integer 
     */
    public function getSocios()
    {
        return $this->socios;
    }

    /**
     * Set nome
     *
     * @param string $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * Get nome
     *
     * @return string 
     */
    public function getNome()
    {
        return $this->nome;
    }
}
