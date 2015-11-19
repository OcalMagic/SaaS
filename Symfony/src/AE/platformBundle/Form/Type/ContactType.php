<?php

namespace AE\platformBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use \Symfony\Component\OptionsResolver\OptionsResolver;
use \Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormEvent;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            //->add('civilite', 'choice', array('choices' => array('Monsieur', 'Madame'), 'required'=>true, 'multiple' => false, 'expanded' => true))
            ->add('nom', 'text')
            ->add('prenom', 'text')
            ->add('societe', 'text')
            ->add('courriel', 'email')
            ->add('telephone', 'text')
            ->add('message', 'textarea')
            ->add('send', 'submit')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AE\platformBundle\Entity\Contact'
        ));
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'csrf_protection' => true,
            'validation_groups' => false,
            'allow_extra_fields' => true,
        ));
    }

    public function getName()
    {
        return 'ae_contact_form';
    }
}

?>