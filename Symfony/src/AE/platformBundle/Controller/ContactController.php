<?php
// src/AE/platformBundle/Controller/AdvertController.php

namespace AE\platformBundle\Controller;

use AE\platformBundle\Entity\Contact;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AE\platformBundle\Form\Type\ContactType;
use AE\platformBundle\Form\Handler\ContactHandler;
use Symfony\Component\HttpFoundation\Request;


class ContactController extends Controller
{
    public function contactAction(Request $request)
    {

        $contact = new Contact();

        $form = $this->createForm(new ContactType(), $contact);


        //$nom = $form->get('nom')->getData();


        if ($form->handleRequest($request)->isValid()) {

                return $this->redirectToRoute('page_d_accueil');
        }


        return $this->render('AEplatformBundle:Contact:pagecontact.php.twig',
                    array(
                        'form' => $form->createView(),
                        'hasError' => $request->getMethod() == 'POST' && !$form->isValid()
                    ));
    }
}

?>