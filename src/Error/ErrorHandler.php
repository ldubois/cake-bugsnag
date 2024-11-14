<?php
namespace Ldubois\Bugsnag\Error;

use Cake\Error\ErrorTrap;

class ErrorHandler extends ErrorTrap
{
    use BugsnagErrorHandlerTrait;
}
