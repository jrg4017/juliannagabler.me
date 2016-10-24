<?php

namespace TigerHuntBundle\Controller;

use TigerHuntBundle\Services\TaskListService;
use TigerHuntBundle\Services\UserService;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class TaskListController
 * @package TigerHuntBundle\Controller
 */
class TaskListController extends AbstractController
{
    /** @var TaskListService */
    protected $taskListService;

    /** @var UserService */
    protected $userService;

    /**
     * TigerHuntController constructor.
     * @param UserService $userService,
     * @param TaskListService $taskListService
     */
    public function __construct(
        UserService $userService,
        TaskListService $taskListService
    )
    {
        $this->userService = $userService;
        $this->taskListService = $taskListService;
    }

    /**
     * @param Request $request
     */
    public function getTaskListAction(Request $request)
    {
        $this->checkPostRequest($request);

        $requestBody = json_decode($request->getContent(), true);

        //let's
        $userID = $requestBody['userID'];
        $token = $requestBody['token'];

        $this->userService->validateUser($userID, $token);
    }

    /**
     * @param Request $request
     */
    public function submitTaskItemAction(Request $request)
    {

    }
}
