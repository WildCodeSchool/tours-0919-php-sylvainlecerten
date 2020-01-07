<?php

namespace App\Form;

use App\Entity\Message;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MessageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $options;
        $builder
            ->add('Prenom', null, array('label' => false))
            ->add('Nom', null, array('label' => false))
            ->add('Societe', null, array('label' => false))
            ->add('Message', null, array('label' => false))
            ->add('Telephone', null, array('label' => false))
            ->add('Email', null, array('label' => false))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Message::class,
        ]);
    }
}
