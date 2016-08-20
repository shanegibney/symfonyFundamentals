<?php

namespace ShanesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
// use Symfony\Component\HttpFoundation\Response; //not needed if using renderResponse

class DefaultController extends Controller
{
    public function indexAction($name, $count)
    {
      // var_dump($name, $count); die;
      //   return $this->render('ShanesBundle:Default:index.html.twig', array('name' => $name, 'count' => $count));


      // $data = array(
      //   'name' => $name,
      //   'count' => $count,
      //   'quote' => 'Hey you people'
      // );
      // $json = json_encode($data);
      //
      // $response = new Response($json);
      // $response->headers->set('Conten-Type','application/json');
      // return $response;

      // $templating = $this->container->get('templating');
      // $content = $templating->render('ShanesBundle:Default:index.html.twig',
      //    array('name'=> $name)
      // );
      // return new Response($content);

      // $templating = $this->container->get('templating');
      // return $templating->renderResponse('ShanesBundle:Default:index.html.twig',
      //    array('name'=> $name)
      // );

      return $this->render('ShanesBundle:Default:index.html.twig',
         array('name'=> $name,
                'count' => $count
             )
      );

    }
}
