<?php
/**
 * Created by PhpStorm.
 * User: arley
 * Date: 27/07/17
 * Time: 20:50
 */

namespace IFNMG\BaseBundle\Form\Type;


use IFNMG\BaseBundle\Entity\Product;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Nome',
                'required' => true,
                'attr' => ['class' => 'form-control produtos', 'placeholder' => 'Nome']
            ])
            ->add('price', TextType::class, [
                'label' => 'Preço',
                'attr' => ['class' => 'form-control' , 'placeholder' => 'Preço']
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Descrição',
                'attr' => ['class' => 'form-control', 'placeholder' => 'Descrição']
            ])
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Product::class,
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'product';
    }
}