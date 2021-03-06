<?php

namespace Siga21\TareasBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class TareasType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('Nombre')
            ->add('Fecha', 'birthday')
            ->add('socios')
            ->add('Notas')
            ->add('Terminada')
        ;
    }

    public function getName()
    {
        return 'siga21_tareasbundle_tareastype';
    }
}
