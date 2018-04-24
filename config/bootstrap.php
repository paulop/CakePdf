<?php
use Cake\Event\Event;
use Cake\Event\EventManager;

EventManager::instance()
    ->on(
        'Controller.initialize',
        function (Event $event) {
            $controller = $event->subject();
            if ($controller->components()->has('RequestHandler')) {
                $controller->RequestHandler->config('viewClassMap.pdf', 'CakePdf.Pdf');
            }
        }
    );
