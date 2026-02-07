<?php

namespace App\Form;

use App\Entity\Tache;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TacheType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre', TextType::class, [
                'label' => 'Titre de la tâche',
            ])
            ->add('type', ChoiceType::class, [
                'label' => 'Type de tâche',
                'choices' => [
                    'Manuel' => 'MANUEL',
                    'Réunion' => 'REUNION',
                    'Révision' => 'REVISION',
                    'Santé' => 'SANTE',
                    'Emploi du temps' => 'EMPLOI',
                ],
            ])
            ->add('dateDebut', DateTimeType::class, [
                'label' => 'Début',
                'widget' => 'single_text',
            ])
            ->add('dateFin', DateTimeType::class, [
                'label' => 'Fin',
                'widget' => 'single_text',
            ])
            ->add('dureeEstimee', IntegerType::class, [
                'label' => 'Durée estimée (minutes)',
            ])
            ->add('priorite', ChoiceType::class, [
                'label' => 'Priorité',
                'choices' => [
                    'Faible' => 'FAIBLE',
                    'Moyenne' => 'MOYEN',
                    'Haute' => 'ELEVEE',
                ],
            ])
            ->add('statut', ChoiceType::class, [
                'label' => 'Statut',
                'choices' => [
                    'À faire' => 'A_FAIRE',
                    'En cours' => 'EN_COURS',
                    'Terminée' => 'TERMINEE',
                    'En retard' => 'EN_RETARD',
                ],
            ])
            ->add('origine', ChoiceType::class, [
                'label' => 'Origine',
                'choices' => [
                    'Manuel' => 'MANUEL',
                    'Réunion' => 'REUNION',
                    'Révision' => 'REVISION',
                    'Santé' => 'SANTE',
                    'Emploi du temps' => 'EMPLOI',
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Tache::class,
        ]);
    }
}
