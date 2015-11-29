<?php
/**
 * Created by PhpStorm.
 * User: rg
 * Date: 27.11.15
 * Time: 21:36
 */

namespace Epar\ServiceBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', 'email', [
                'label' => 'form.email',
                'translation_domain' => 'FOSUserBundle',
                'attr' => ['class' => 'form-control']
            ])
            ->add('username', null, [
                'label' => 'form.username',
                'translation_domain' => 'FOSUserBundle',
                'attr' => ['class' => 'form-control']
            ])
            ->add('plainPassword', 'repeated', [
                'type' => 'password',
                'options' => ['translation_domain' => 'FOSUserBundle'],
                'first_options' => ['label' => 'form.password', 'attr' => ['class' => 'form-control']],
                'second_options' => ['label' => 'form.password_confirmation', 'attr' => ['class' => 'form-control']],
                'invalid_message' => 'fos_user.password.mismatch',
            ])
        ;
    }

    public function getParent()
    {
        return 'fos_user_registration';
    }

    public function getName()
    {
        return 'app_user_registration';
    }
}