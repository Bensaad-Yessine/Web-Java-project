<?php

namespace App\Form;

use App\Entity\Classe;
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
            ->add('matiereClasses')
            ->add('Classe', EntityType::class, [
    'class' => Classe::class,
    'choice_label' => 'nom', // or 'id' if you prefer
    'multiple' => true,       // important for ManyToMany
    'expanded' => false,      // false = multi-select, true = checkboxes
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
