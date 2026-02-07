<?php

namespace App\Form;

use App\Entity\SuiviBienEtre;
use App\Entity\ObjectifSante;
use App\Repository\ObjectifSanteRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SuiviBienEtreType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('objectif', EntityType::class, [
                'class' => ObjectifSante::class,
                'choice_label' => fn(ObjectifSante $o) => $o->getTitre().' ('.$o->getType().')',
                'query_builder' => fn(ObjectifSanteRepository $r) => $r->createQueryBuilder('o')->orderBy('o.id', 'DESC'),
                'label' => 'Objectif',
                'placeholder' => 'Sélectionner un objectif',
            ])
            ->add('dateSaisie', DateType::class, [
                'label' => 'Date de saisie',
                'widget' => 'single_text',
            ])
            ->add('humeur', ChoiceType::class, [
                'label' => 'Humeur',
                'choices' => [
                    'Heureux' => 'Heureux',
                    'Calme' => 'Calme',
                    'Fatigué' => 'Fatigué',
                    'Triste' => 'Triste',
                    'Stressé' => 'Stressé',
                    'Anxieux' => 'Anxieux',
                ],
            ])
            ->add('qualiteSommeil', IntegerType::class, [
                'label' => 'Qualité du sommeil (0-10)',
            ])
            ->add('niveauEnergie', IntegerType::class, [
                'label' => "Niveau d'énergie (0-10)",
            ])
            ->add('niveauStress', IntegerType::class, [
                'label' => "Niveau de stress (0-10)",
            ])
            ->add('qualiteAlimentation', IntegerType::class, [
                'label' => "Qualité de l'alimentation (0-10)",
            ])
            ->add('notesLibres', TextareaType::class, [
                'label' => 'Notes (optionnel)',
                'required' => false,
                'attr' => ['rows' => 4],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => SuiviBienEtre::class,
        ]);
    }
}
