<?php

namespace AlazziAz\Tamara;

use AlazziAz\Tamara\Tamara\Client;
use AlazziAz\Tamara\Tamara\Notification\NotificationService;

class Tamara
{
    protected NotificationService $notificationService;
    protected Client $client;

    public function __construct(
        Client $client,
        NotificationService $notificationService
    ) {
        $this->client = $client;
        $this->notificationService = $notificationService;
    }

    public function client(): Client
    {
        return $this->client;
    }

    public function notificationService(): NotificationService
    {
        return $this->notificationService;
    }
}
