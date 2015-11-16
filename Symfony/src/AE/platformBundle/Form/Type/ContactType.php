<?php

namespace AE\platformBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;


class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('civil', 'choice', array('choices' => array('Mister', 'Miss'), 'multiple' => false, 'expanded' => true))
            ->add('name', 'text')
            ->add('society', 'text')
            ->add('email', 'email')
            ->add('phone', 'text')
            ->add('message', 'textarea');
    }

    public function getName()
    {
        return 'Contact';
    }
}

?>