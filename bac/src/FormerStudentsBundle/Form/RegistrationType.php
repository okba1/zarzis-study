<?php

namespace FormerStudentsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RegistrationType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstName', 'text')
            ->add('lastName', 'text')
            ->add('civility', 'choice', array(
                'choices' => array('m' => 'masculin', 'f' => 'Féminin')))
            ->add('studySector', 'text')
            ->add('graduationYear', 'number')
            ->add('university',new UniversityType())
            ->add('save', 'submit');
        ;
    }

    public function getParent()
    {
        return 'fos_user_registration';
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'FormerStudentsBundle\Entity\FormerStudent'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'formerstudentsbundle_formerstudent_registration';
    }
}
