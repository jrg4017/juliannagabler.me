<?php

namespace TigerHuntBundle\Controller;

use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\Finder\Exception\AccessDeniedException;
use Symfony\Component\HttpFoundation\JsonResponse;
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
     * @return JsonResponse
     */
    public function getTaskListAction(Request $request)
    {
        $this->checkPostRequest($request);

        $requestBody = json_decode($request->getContent(), true);

        //let's
        $userID = $requestBody['userID'];
        $token = $requestBody['token'];

        try {
            //validate user and get task list
            $this->userValidation($userID, $token);
            $taskList = $this->taskListService->fetchTaskList();

            $response = array('success' => true, 'taskList' => $taskList);
            $httpStatusCode = 200;
        } catch (AccessDeniedException $ae) {
            $response = array('success' => false, 'error' => "User was invalid or not found");
            $httpStatusCode = 500;

            //TODO implement logging (monolog logger)
            error_log($ae->getMessage());
        } catch (Exception $e) {
            $response = array('success' => false, 'error' => "An unexpected error occurred");
            $httpStatusCode = 500;

            //TODO implement logging (monolog logger)
            error_log($e->getMessage());
        }

        return new JsonResponse(json_encode($response), $httpStatusCode);
    }

    /**
     * @param Request $request
     */
    public function submitTaskItemAction(Request $request)
    {

    }

    /**
     * @param int $userID
     * @param string $token
     * @throws AccessDeniedException
     */
    private function userValidation($userID, $token) {
        $this->userService->validateUser($userID);

        //$this->tokenValidationService->isValidToken($token);
    }
}
