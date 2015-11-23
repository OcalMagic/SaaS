<?php
/**
 * Created by PhpStorm.
 * User: Florence
 * Date: 23/11/2015
 * Time: 21:48
 */

namespace AE\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EntrepriseType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', 'text', array('label'  => 'Nom du patron'))
            ->add('nomEntreprise', 'text', array('label'  => 'Nom entreprise'))
            ->add('siretId', 'number', array('label'  => 'SIRET/SIREN'))
            ->add('nafId', 'text', array('label'  => 'Code NAF'))
            ->add('enregistrer', 'submit', array('label'  => 'Enregistrer'))
        ;
    }
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AE\UserBundle\Entity\Entreprise',
        ));
    }

    public function getName()
    {
        return 'ae_user_entreprise';
    }


}