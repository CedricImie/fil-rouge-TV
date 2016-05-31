<?php

namespace MovieBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EpisodesType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomEpisode')
            ->add('resumeEpisode')
            ->add('dureeEpisode')
            ->add('dateEpisode', 'datetime')
            ->add('noteMoyenneEpisode')
            ->add('classificationEpisode')
            ->add('diffusionEpisode', 'datetime')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MovieBundle\Entity\Episodes'
        ));
    }
}
