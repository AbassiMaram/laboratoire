<?php

namespace App\Form;

use App\Entity\Chercheur;
use App\Entity\equipement;
use App\Entity\projet;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ChercheurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom')
            ->add('email')
            ->add('mot_de_passe')
            ->add('role')
            ->add('projet', EntityType::class, [
                'class' => projet::class,
'choice_label' => 'id',
'multiple' => true,
            ])
            ->add('equipement', EntityType::class, [
                'class' => equipement::class,
'choice_label' => 'id',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Chercheur::class,
        ]);
    }
}
