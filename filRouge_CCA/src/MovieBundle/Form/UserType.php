<?php

namespace MovieBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('pseudoUtilisateur')
            ->add('prenomUtilisateur')
            ->add('nomUtilisateur')
            ->add('adresseEmailUtilisateur')
            ->add('dateNaissanceUtilisateur', 'datetime')
            ->add('photoProfilUtilisateur')
            ->add('motDePasseUtilisateur')
            ->add('sexeUtilisateur')
            ->add('facebookUtilisateur')
            ->add('twitterUtilisateur')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MovieBundle\Entity\User'
        ));
    }
}
