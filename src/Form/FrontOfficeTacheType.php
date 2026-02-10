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
                    'Course' => 'course',
                    'Exam' => 'exam',
                    'Meeting' => 'meeting',
                    'Personal' => 'personal',
                    'Project' => 'project',
                    'Assignment' => 'assignment',
                ],
                'attr' => ['class' => 'form-control'],
                'placeholder' => 'Select type...',
                'required' => true,
            ])
            ->add('priorite', ChoiceType::class, [
                'label' => 'Priority',
                'choices' => [
                    'FAIBLE' => 'FAIBLE',
            'MOYEN' => 'MOYEN',
            'ELEVEE' => 'ELEVEE',
                ],
                'attr' => ['class' => 'form-control'],
                'placeholder' => 'Select priority...',
                'required' => true,
                'data' => 'medium',
            ])
            ->add('dateEcheance', DateType::class, [
                'label' => 'Due Date',
                'widget' => 'single_text',
                'attr' => ['class' => 'form-control'],
                'required' => true,
            ])
            ->add('statut', ChoiceType::class, [
                'label' => 'Status',
                'choices' => [
                    'Pending' => 'pending',
                    'In Progress' => 'in_progress',
                    'Completed' => 'completed',
                ],
                'attr' => ['class' => 'form-control'],
                'required' => true,
                'data' => 'pending',
            ])
            // Hidden fields with defaults
            ->add('dateDebut', DateTimeType::class, [
                'widget' => 'single_text',
                'required' => false,
                'attr' => ['class' => 'd-none'],
                'data' => new \DateTime(),
            ])
            ->add('dateFin', DateTimeType::class, [
                'widget' => 'single_text',
                'required' => false,
                'attr' => ['class' => 'd-none'],
                'data' => (new \DateTime())->modify('+1 hour'),
            ])
            ->add('dureeEstimee', IntegerType::class, [
                'required' => false,
                'attr' => ['class' => 'd-none'],
                'data' => 60,
            ])
            ->add('origine', ChoiceType::class, [
                'choices' => [
                    'Manual' => 'MANUEL',
                ],
                'required' => false,
                'attr' => ['class' => 'd-none'],
                'data' => 'MANUEL',
            ])
            ->add('createdAt', DateTimeType::class, [
                'widget' => 'single_text',
                'required' => false,
                'attr' => ['class' => 'd-none'],
                'data' => new \DateTime(),
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Tache::class,
        ]);
    }
}