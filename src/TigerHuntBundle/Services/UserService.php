<?php

namespace TigerHuntBundle\Services;

use Symfony\Component\Finder\Exception\AccessDeniedException;

class UserService
{
    /**
     * @param $userID
     * @param $token
     * @return bool
     * @throws AccessDeniedException
     */
    public function validateUser($userID, $token) {
        if($userID = 0) {
            throw new AccessDeniedException('User was not found.');
        }

        return true;
    }

}
