<?php

namespace TigerHuntBundle\Services;

use Symfony\Component\Config\Definition\Exception\Exception;
use TigerHuntBundle\Model\Entity\Task\Task;
use TigerHuntBundle\Model\Repository\Task\TaskRepository;

/**
 * Class TaskListService
 * @package TigerHuntBundle\Services
 */
class TaskListService
{
    /** @var  TaskRepository */
    protected $taskRepository;

    /**
     * TaskListService constructor.
     * @param TaskRepository $taskRepository
     */
    public function __construct(
        TaskRepository $taskRepository
    )
    {
        $this->taskRepository = $taskRepository;
    }

    public function fetchTaskList()
    {
        /** @var Task[] $taskList */
        $taskList = $this->taskRepository->findAll();

        if(empty($taskList)) {
            throw new Exception('Cannot find task list.');
        }

        return $taskList;
    }
}
