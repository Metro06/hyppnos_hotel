<?php

namespace App\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;


class homePage extends AbstractController
{

  /**
   * @Route("/")
   *
   * @return Response
   */
  public function homePageHyppnos () : Response 
  {
      return $this->render('homePage/hyppnos.html.twig');
  }

}
