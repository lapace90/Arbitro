<?php

namespace App\Form;

use App\Entity\Team;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TeamType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, ['label' => 'Nom Équipe'])
            ->add('match_played', IntegerType::class, ['label' => 'Match joués'])
            ->add('win', IntegerType::class, ['label' => 'Match gagnés'])
            ->add('lose', IntegerType::class, ['label' => 'Match perdus'])
            ->add('category', TextType::class, ['label' => 'Nom Équipe'])
            ->add('points', IntegerType::class, ['label' => 'Points'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Team::class,
        ]);
    }
}
