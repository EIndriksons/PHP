<?php

require 'functions.php';

class Task {
    protected $description;
    protected $completed = false;

    public function __construct($description) {
        $this->description = $description;
    }

    public function complete() {
        $this->completed = true;
    }

    public function isComplete() {
        return $this->completed;
    }

    public function description() {
        return $this->description;
    }
}

$task = new Task('Go to the store');

var_dump($task->isComplete());

$task->complete();

var_dump($task);

$tasks = [
    new Task('Go to the store'),
    new Task('Finish my screencast'),
    new Task('Clean my room')
];

// dd($tasks);

$tasks[0]->complete();

require 'index.view.php';