<?php

namespace Siga21\TareasBundle\Entity;

use Doctrine\ORM\EntityRepository;

class TareasRepository extends EntityRepository
{
   public function findbyTareasMas()
   {
       $em = $this->getEntityManager();
       $consulta = $em->createQuery('SELECT t,a FROM Siga21TareasBundle:Tareas t JOIN t.socios a ');
       return $consulta->GetResult(); 
   }
}
?>
