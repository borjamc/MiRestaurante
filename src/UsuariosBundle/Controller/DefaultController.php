<?php

namespace UsuariosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use UsuariosBundle\Entity\Usuarios;
use UsuariosBundle\Form\UsuariosType;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
  /**
   * @Route("/listarusuarios", name="usuarios")
   */
  public function allAction()
  {
      $repository = $this->getDoctrine()->getRepository('UsuariosBundle:Usuarios');
      $usuario = $repository->findAll();
      return $this->render('UsuariosBundle:Default:all.html.twig',array("usuarios"=>$usuario));
  }

  /**
     * @Route("/register", name="user_registration")
     */
    public function registerAction(Request $request)
    {
        // 1) build the form
        $user = new Usuarios();
        $form = $this->createForm(UsuariosType::class, $user);

        // 2) handle the submit (will only happen on POST)
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            // 3) Encode the password (you could also do this via Doctrine listener)
            $password = $this->get('security.password_encoder')
                ->encodePassword($user, $user->getPlainPassword());
            $user->setPassword($password);

            // 4) save the User!
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            // ... do any other work - like sending them an email, etc
            // maybe set a "flash" success message for the user

            return $this->redirectToRoute('usuarios');
        }

        return $this->render(
            'UsuariosBundle:Default:register.html.twig',
            array('form' => $form->createView())
        );
    }

    /**
    * @Route("/nuevaUsuario")
    */
public function nuevoUsuarioAction(Request $request)
{
  $usuario=new Usuarios();
  $form=$this->createForm(UsuariosType::class, $usuario);
  $form->handleRequest($request);

  if ($form->isSubmitted() && $form->isValid()) {
    $usuario=$form->getData();
    $em=$this->getDoctrine()->getManager();
    $em->persist($usuario);
    $em->flush();
    return $this->redirectToRoute('index');
  }
  return $this->render('UsuariosBundle:Default:insertarusuario.html.twig', array('form'=>$form->createView()));
}
}
