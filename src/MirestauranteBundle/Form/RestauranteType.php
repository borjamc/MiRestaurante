<?php

namespace MirestauranteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class RestauranteType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('nombre',TextType::class,array('label'=>'Nombre: ',
                                             'label_attr'=>array('class'=>'etiqueta'),
                                             'attr'=>array('class'=>'formulario')))
        ->add('descripcion',TextType::class,array('label'=>'Descripcion: ',
                                            'label_attr'=>array('class'=>'etiqueta'),
                                            'attr'=>array('class'=>'formulario')))
        ->add('fechaCreacion',DateType::class,array('label'=>'Fecha: ',
                                                    'label_attr'=>array('class'=>'etiqueta'),
                                                    'attr'=>array('class'=>'formulario')))
        ->add('precio',IntegerType::class,array('label'=>'Precio: ',
                                            'label_attr'=>array('class'=>'etiqueta'),
                                            'attr'=>array('class'=>'formulario')))
        ->add('foto',TextType::class,array('label'=>'Foto: ',
                                             'label_attr'=>array('class'=>'etiqueta'),
                                             'attr'=>array('class'=>'formulario')))
        ->add('Enviar',SubmitType::class,array('attr'=>array('class'=>'formulario')));
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MirestauranteBundle\Entity\Restaurante'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'mirestaurantebundle_restaurante';
    }


}
