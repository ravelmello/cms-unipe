<?php

namespace Custom\CMSBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PersonType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('personName', TextType::class, [
            'required' => true,
            'attr'=> array(
                'placeholder' => 'Insert the person name',
                'class' => 'form-control'

            )
        ])
            ->add('personBirthDate',DateType::class, [
                'required' => true,
                'attr' => array(
                    'class' => 'form-control'

                )
            ])
            ->add('personUsername', TextType::class,[
                'required'=> true,
                'attr' => array(
                    'class' => 'form-control'

                )
            ])
            ->add('personPassword', PasswordType::class,[
                'required' => true,
                'attr' => array(
                    'class' => 'form-control'

                )
            ]);
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Custom\CMSBundle\Entity\Person'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'custom_cmsbundle_person';
    }


}
