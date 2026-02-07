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
            ->add('classe', EntityType::class, [
                'class' => Classe::class,
                'choice_label' => 'id',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => MatiereClasse::class,
        ]);
    }
}
