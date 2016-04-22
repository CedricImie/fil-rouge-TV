<?php

namespace MovieBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
<<<<<<< HEAD
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
    
=======

>>>>>>> 1edfc541a638e850ea93c04d4ea7ed40bf081b43
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
