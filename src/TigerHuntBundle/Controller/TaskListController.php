<?php

namespace TigerHuntBundle\Controller;

use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\Finder\Exception\AccessDeniedException;
use Symfony\Component\HttpFoundation\JsonResponse;
use TigerHuntBundle\Services\TaskListService;
use TigerHuntBundle\Services\UserService;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class TaskListController
 * @package TigerHuntBundle\Controller
 */
class TaskListController extends AbstractController
{
    /** @var TaskListService */
    private $taskListService;

    /** @var UserService */
    private $userService;

    /**
     * TigerHuntController constructor.
     * @param UserService $userService,
     * @param TaskListService $taskListService
     */
    public function __construct(UserService $userService, TaskListService $taskListService)
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
        //$this->checkPostRequest($request);
        $requestBody = json_decode($request->getContent(), true);

        //let's get our needed data
        $userID = $requestBody['userID'];
        $token = $requestBody['token'];

        try {
            //validate user and get task list
            $this->userValidation($userID, $token);
            $taskList = $this->taskListService->fetchTaskList();
            //set the response if successful and send it off
            $response = array('success' => true, 'taskList' => $taskList);
            $httpStatusCode = 200;
        } catch (AccessDeniedException $ae) {
            $response = array('success' => false, 'error' => self::INVALID_USER_ERROR);
            $httpStatusCode = 500;
            //$this->logger->error($ae->getMessage());
        } catch (Exception $e) {
            $response = array('success' => false, 'error' => self::GENERIC_ERROR);
            $httpStatusCode = 500;
            //$this->logger->error($e->getMessage());
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
     * validates the user and the token associated with the application
     * @param int $userID
     * @param string $token
     * @throws AccessDeniedException
     */
    private function userValidation($userID, $token) {
        //$this->userService->validateUser($userID);
        throw new AccessDeniedException('asd');
        //$this->tokenValidationService->isValidToken($token);
    }
}
