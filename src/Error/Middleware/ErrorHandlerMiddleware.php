<?php

namespace Ldubois\Bugsnag\Error\Middleware;

use Cake\Error\Middleware\ErrorHandlerMiddleware as BaseErrorHandlerMiddleware;
use Cake\Log\Log;

class ErrorHandlerMiddleware extends BaseErrorHandlerMiddleware
{
    /**
     * {@inheritdoc}
     */
    protected function logException($request, $exception)
    {
        if (!$this->getConfig('log')) {
            return;
        }

        foreach ((array)$this->getConfig('skipLog') as $class) {
            if ($exception instanceof $class) {
                return;
            }
        }

        $message = $this->getMessage($request, $exception);
        Log::error($message, compact('request', 'exception'));
    }
}
