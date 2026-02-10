<?php

namespace App\Form;

use App\Entity\Classe;
use App\Entity\MatiereClasse;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class ClasseType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom')
            ->add('niveau')
            ->add('anneeuniversitaire')
            ->add('matiereClasses', EntityType::class, [
                'class' => MatiereClasse::class,
                'choice_label' => 'id', // or any property of MatiereClasse
                'multiple' => true,
                'expanded' => false,
            ])
            
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Classe::class,
        ]);
    }
}