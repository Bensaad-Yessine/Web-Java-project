<?php

namespace App\Form;

use App\Entity\Classe;
use App\Entity\MatiereClasse;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MatiereClasseType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
       $builder
    ->add('coefficient')
    ->add('chargehoraire')
    ->add('scorecomplexite')
    ->add('Classe', EntityType::class, [ // matches the entity property name exactly
        'class' => Classe::class,
        'choice_label' => 'nom', // or 'id'
        'multiple' => true,       // must be true for ManyToMany
        'expanded' => false,      // false = multi-select, true = checkboxes
        'required' => true,
    ]);

    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => MatiereClasse::class,
        ]);
    }
}
