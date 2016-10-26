<?php

namespace TigerHuntBundle\Controller;

use Symfony\Component\HttpKernel\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class AbstractController
 * @package AppBundle\Controller
 */
abstract class AbstractController extends Controller
{
    /** Errors reported back to user */
    const GENERIC_ERROR = "An unexpected error occurred. Please try again";
    const INVALID_USER_ERROR = "User was invalid or not found";

    /** @var LoggerInterface */
    protected $logger;

    /**
     * @param LoggerInterface $logger
     */
    public function setLogger(LoggerInterface $logger) {
        $this->logger = $logger;
    }

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
}
