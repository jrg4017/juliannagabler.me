<?php

namespace TigerHuntBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class AbstractController
 * @package AppBundle\Controller
 */
abstract class AbstractController extends Controller
{

    /**
     * @param Request $request
     * @throws AccessDeniedException
     */
    public function checkPostRequest(Request $request)
    {
        if ($request->getMethod() !== 'POST') {
            throw new AccessDeniedException('Could not complete action due to incorrect request type.');
        }
    }

    /**
     * @param string $message
     * @param \Exception|null $previous
     * @return AccessDeniedException
     */
    public function createAccessDeniedException($message = 'Access denied.', \Exception $previous = null)
    {
        return new AccessDeniedException($message, $previous);
    }
}
