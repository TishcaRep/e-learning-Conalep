<?php


/**
 * Interface to apply to all the classes we want to be executable (plan/part/task)
 *
 * TODO: Finish phpdocs
 */
interface executable {

    /**
     * This function will perform all the actions necessary to achieve the execution
     * of the plan/part/task
     */
    public function execute();
}
