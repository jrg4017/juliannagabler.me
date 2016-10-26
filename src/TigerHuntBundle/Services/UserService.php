<?php

namespace TigerHuntBundle\Services;

use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\Finder\Exception\AccessDeniedException;
use TigerHuntBundle\Model\Entity\User\User;
use TigerHuntBundle\Model\Repository\User\UserRepositoryInterface;

class UserService
{
    /** @var UserRepositoryInterface */
    protected $userRepository;

    /**
     * UserService constructor.
     * @param UserRepositoryInterface $userRepository
     */
    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * validate user by finding them in database or throw exception
     *
     * @param $userID
     * @return bool
     * @throws AccessDeniedException
     */
    public function validateUser($userID) {
        /** @var User $user */
        $user = $this->getUser($userID);

        if (!$user) {
            throw new AccessDeniedException('User was not found');
        }

        return true;
    }

    /**
     * get the user from the database
     *
     * @param int $userID
     * @return null|User
     */
    public function getUser($userID)
    {
        /** @var User $user */
        $user = $this->userRepository->findOneBy(array('userID' => $userID));

        return $user;
    }
}
