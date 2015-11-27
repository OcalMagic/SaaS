<?php

namespace AE\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


use AE\UserBundle\Entity\User;
use AE\UserBundle\Entity\Entreprise;
use AE\UserBundle\Form\EntrepriseType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints\DateTime;


class UserController extends Controller
{

    public function newEntrepriseAction(Request $request)
    {

        $entreprise = new Entreprise();

        $form = $this->createForm(new EntrepriseType(), $entreprise);

        $form->handleRequest($request);

        if ($form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($entreprise);
            $em->flush();

            return $this->redirectToRoute('dashboard_user');

        }


        return $this->render('AEUserBundle:Entreprise:entreprise.html.twig', array(
            'form' => $form->createView(),
        ));
    }

}
