<?php

namespace App\Form;

use App\Entity\Tache;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FrontOfficeTacheType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre', TextType::class, [
                'label' => 'Task Title',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'e.g., Complete homework assignment'
                ],
                'required' => true,
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description',
                'required' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Add more details about this task...',
                    'rows' => 4
                ],
            ])
            ->add('type', ChoiceType::class, [
                'label' => 'Task Type',
                'choices' => [
                    'Manual' => 'MANUEL',
                    'Meeting' => 'REUNION',
                    'Revision' => 'REVISION',
                    'Health' => 'SANTE',
                    'Schedule' => 'EMPLOI',
                ],
                'attr' => ['class' => 'form-control'],
                'placeholder' => 'Select type...',
                'required' => true,
            ])
            ->add('priorite', ChoiceType::class, [
                'label' => 'Priority',
                'choices' => [
                    'Low' => 'FAIBLE',
                    'Medium' => 'MOYEN',
                    'High' => 'ELEVEE',
                ],
                'attr' => ['class' => 'form-control'],
                'placeholder' => 'Select priority...',
                'required' => true,
            ])
            ->add('dateDebut', DateTimeType::class, [
                'label' => 'Start Date',
                'widget' => 'single_text',
                'attr' => ['class' => 'form-control'],
                'required' => true,
            ])
            ->add('dateFin', DateTimeType::class, [
                'label' => 'End Date',
                'widget' => 'single_text',
                'attr' => ['class' => 'form-control'],
                'required' => true,
            ])
            ->add('dateEcheance', DateType::class, [
                'label' => 'Due Date',
                'widget' => 'single_text',
                'attr' => ['class' => 'form-control'],
                'required' => false,
            ])
            ->add('statut', ChoiceType::class, [
                'label' => 'Status',
                'choices' => [
                    'To Do' => 'A_FAIRE',
                    'In Progress' => 'EN_COURS',
                    'Completed' => 'TERMINEE',
                    'Overdue' => 'EN_RETARD',
                    'Paused' => 'PAUSED',
                ],
                'attr' => ['class' => 'form-control'],
                'required' => true,
            ])
            ->add('dureeEstimee', IntegerType::class, [
                'label' => 'Estimated Duration (minutes)',
                'required' => false,
                'attr' => ['class' => 'form-control'],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Tache::class,
        ]);
    }
}