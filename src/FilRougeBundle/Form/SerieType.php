<?php

namespace FilRougeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Vich\UploaderBundle\Form\Type\VichImageType;
use Vich\UploaderBundle\Form\Type\VichFileType;
use FilRougeBundle\Form\PictureType;

class SerieType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('picture', PictureType::class)
            ->add('resume', 'textarea')
            ->add('season' ,'choice',array('choices' => array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29)))
            ->add('status' ,'choice',array('choices' => array('En production', 'Arretée', 'En attente', 'Prochainement'))) // To do : Redifine
            ->add('nationality') // To do : choice list for countries
            ->add('director')
            ->add('actors')
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'FilRougeBundle\Entity\Serie'
        ));
    }
}
