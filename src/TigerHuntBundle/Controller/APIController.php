<?php

namespace TigerHuntBundle\Controller;

use Symfony\Component\HttpFoundation\Response;

/**
 * Class APIController
 * @package TigerHuntBundle\Controller
 */
class APIController extends AbstractController
{
    /**
     * @return Response
     */
    public function indexAction()
    {
        return $this->render('TigerHuntBundle::api-documentation.html.twig', array('prefix' =>'/tiger-hunt/'));
    }
}
