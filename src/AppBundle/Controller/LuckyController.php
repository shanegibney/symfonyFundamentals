<?php

// src/AppBundle/Controller/LuckyController.php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

// use Symfony\Bundle\Framework\Controller\Controller

class LuckyController
{
    /**
     * @Route("/lucky/number/{max}")
     */
    public function numberAction($max)
    {
        $number = mt_rand(0, $max);

        // return $this->render('lucky/number.html.twig', array(
        //     'number' => $number
        // ));
        return new Response(
         '<html><body>Lucky number: '.$number.'</body></html>'
       );
    }
}
