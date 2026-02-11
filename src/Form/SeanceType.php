<?php

namespace App\Form;

use App\Entity\Seance;
use App\Entity\MatiereClasse;
use App\Entity\Classe;
use App\Entity\Salle;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class SeanceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('matiere', EntityType::class, [
                'class' => MatiereClasse::class,
                'choice_label' => function(?MatiereClasse $matiereClasse) {
                    if (!$matiereClasse) {
                        return '';
                    }
                    // Check what methods are available
                    if (method_exists($matiereClasse, 'getMatiere') && 
                        method_exists($matiereClasse->getMatiere(), 'getNom')) {
                        return $matiereClasse->getMatiere()->getNom();
                    }
                    if (method_exists($matiereClasse, '__toString')) {
                        return $matiereClasse->__toString();
                    }
                    if (method_exists($matiereClasse, 'getNom')) {
                        return $matiereClasse->getNom();
                    }
                    return 'Matière #' . $matiereClasse->getId();
                },
                'label' => 'Matière',
                'placeholder' => 'Sélectionnez une matière',
                'required' => true,
            ])
            ->add('jour', ChoiceType::class, [
                'label' => 'Jour',
                'choices' => [
                    'Lundi' => 'Lundi',
                    'Mardi' => 'Mardi',
                    'Mercredi' => 'Mercredi',
                    'Jeudi' => 'Jeudi',
                    'Vendredi' => 'Vendredi',
                    'Samedi' => 'Samedi',
                ],
                'placeholder' => 'Sélectionnez un jour',
                'required' => true,
            ])
            ->add('typeSeance', ChoiceType::class, [
                'label' => 'Type de séance',
                'choices' => [
                    'MATINALE' => 'MATINALE',
                    'APRES_MIDI' => 'APRES_MIDI',
                ],
                'placeholder' => 'Sélectionnez un type',
                'required' => true,
            ])
            ->add('mode', ChoiceType::class, [
                'label' => 'Mode',
                'choices' => [
                    'PRESENTIEL' => 'PRESENTIEL',
                    'EN_LIGNE' => 'EN_LIGNE',
                ],
                'placeholder' => 'Sélectionnez un mode',
                'required' => true,
            ])
            ->add('classe', EntityType::class, [
                'class' => Classe::class,
                'choice_label' => function(?Classe $classe) {
                    if (!$classe) {
                        return '';
                    }
                    if (method_exists($classe, '__toString')) {
                        return $classe->__toString();
                    }
                    if (method_exists($classe, 'getNom')) {
                        return $classe->getNom();
                    }
                    return 'Classe #' . $classe->getId();
                },
                'label' => 'Classe',
                'placeholder' => 'Sélectionnez une classe',
                'required' => true,
            ])
            ->add('heureDebut', DateTimeType::class, [
                'label' => 'Heure de début',
                'widget' => 'single_text',
                'html5' => false,
                'attr' => ['class' => 'datetime-picker'],
                'required' => false,
            ])
            ->add('heureFin', DateTimeType::class, [
                'label' => 'Heure de fin',
                'widget' => 'single_text',
                'html5' => false,
                'attr' => ['class' => 'datetime-picker'],
                'required' => false,
            ])
            ->add('salle', EntityType::class, [
                'class' => Salle::class,
                'choice_label' => function(?Salle $salle) {
                    if (!$salle) {
                        return '';
                    }
                    if (method_exists($salle, '__toString')) {
                        return $salle->__toString();
                    }
                    if (method_exists($salle, 'getName')) {
                        return $salle->getName();
                    }
                    if (method_exists($salle, 'getNom')) {
                        return $salle->getNom();
                    }
                    return 'Salle #' . $salle->getId();
                },
                'label' => 'Salle',
                'placeholder' => 'Sélectionnez une salle',
                'required' => true,
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Seance::class,
        ]);
    }
}