<?php
namespace Ldubois\Bugsnag\Error;

use Cake\Error\ErrorHandler as CakeErrorHandler;

class ErrorHandler extends CakeErrorHandler
{
    use BugsnagErrorHandlerTrait;
}
