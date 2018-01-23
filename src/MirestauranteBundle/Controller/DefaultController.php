<?php

namespace MirestauranteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use MirestauranteBundle\Entity\Restaurante;
use MirestauranteBundle\Form\RestauranteType;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('MirestauranteBundle:Default:index.html.twig');
    }

    /**
    * @Route("/nuevatapa")
    */
public function nuevatapaAction(Request $request)
{
  $tapa=new Restaurante();
  $form=$this->createForm(RestauranteType::class, $tapa);
  $form->handleRequest($request);

  if ($form->isSubmitted() && $form->isValid()) {
    $tapa=$form->getData();
    $em=$this->getDoctrine()->getManager();
    $em->persist($tapa);
    $em->flush();
    return $this->redirectToRoute('tapa');
  }
  return $this->render('MirestauranteBundle:Default:algonuevo.html.twig', array('form'=>$form->createView()));
}

/**
     * @Route("/editartapa/{id}", name="editar")
     */
    public function editarTapaAction(Request $request, $id)
    {
      $tapa=$this->getDoctrine()->getRepository(Restaurante::class)->find($id);
      $form=$this->createForm(RestauranteType::class, $tapa);
      $form->handleRequest($request);
      if ($form->isSubmitted() && $form->isValid()) {
         $em = $this->getDoctrine()->getManager();
         $em->persist($tapa);
         $em->flush();
         return $this->redirectToRoute('tapa');
       }
      return $this-> render('MirestauranteBundle:Default:algonuevo.html.twig', array('form'=>$form->createView()));
    }

    /**
    * @Route("/borrar/{id}", name="borrar")
    */
    public function borrarAction($id)
    {
      $db=$this->getDoctrine()->getManager();
      $eliminar = $db ->getRepository(Restaurante::class)->find($id);
      $db->remove($eliminar);
      $db->flush();
        return $this->redirectToRoute('tapa');
    }

/**
 * @Route("/listartapa", name="tapa")
 */
public function allAction()
{
    $repository = $this->getDoctrine()->getRepository('MirestauranteBundle:Restaurante');
    $tapa = $repository->findAll();
    return $this->render('MirestauranteBundle:Default:all.html.twig',array("tapas"=>$tapa));
}

}
