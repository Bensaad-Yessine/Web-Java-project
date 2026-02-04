<?php

namespace App\Form;

use App\Entity\GroupeProjet;
use App\Entity\PropositionReunion;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PropositionReunionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('propositionId')
            ->add('titre')
            ->add('dateReunion')
            ->add('heureDebut')
            ->add('heureFin')
            ->add('lieu')
            ->add('description')
            ->add('status')
            ->add('dateCreation')
            ->add('nbrVoteAccept')
            ->add('idGroupe', EntityType::class, [
                'class' => GroupeProjet::class,
                'choice_label' => 'id',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => PropositionReunion::class,
        ]);
    }
}
