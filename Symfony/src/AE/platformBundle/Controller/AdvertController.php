<?php
// src/AE/platformBundle/Controller/AdvertController.php

namespace AE\platformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class AdvertController extends Controller
{
    public function homepageAction()
    {
        return $this->render('AEplatformBundle:Advert:homepage.html.twig');
    }

    public function contactAction()
    {
        return $this->render('AEplatformBundle:Advert:pagecontact');
    }
}

?>
