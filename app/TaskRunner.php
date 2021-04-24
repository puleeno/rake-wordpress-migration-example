<?php
namespace App;

class TaskRunner
{
    const TASK_CRON_NAME = 'rake-wordpress-migration-example';

    protected static $instance;

    protected $tasks = array();

    private function __construct()
    {
    }

    public static function get_instance()
    {
        if (is_null(static::$instance)) {
            static::$instance = new static();
        }
        return static::$instance;
    }

    public function set_tasks($tasks)
    {
        foreach ($tasks as $task) {
            if (is_a($task, Task::class)) {
                $this->tasks[] = $task;
            }
        }
    }

    public function run()
    {
    }
}
