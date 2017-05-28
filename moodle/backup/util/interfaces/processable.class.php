<?php

interface processable {

    /**
     * This function will call to the corresponding processor method in other to
     * make them perform the desired tasks.
     */
    public function process($processor);
}
