<?php
// src/AE/platformBundle/Controller/AdvertController.php

namespace AE\platformBundle\Controller;
use Symfony\Component\HttpFoundation\Response;


class AdvertController
{
    public function indexAction()
    {
        return new Response("Hello World !");
    }
}

?>
