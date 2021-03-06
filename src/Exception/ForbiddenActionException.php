<?php

namespace AlterPHP\EasyAdminMongoOdmBundle\Exception;

use EasyCorp\Bundle\EasyAdminBundle\Exception\BaseException;
use EasyCorp\Bundle\EasyAdminBundle\Exception\ExceptionContext;

class ForbiddenActionException extends BaseException
{
    public function __construct(array $parameters = [])
    {
        $exceptionContext = new ExceptionContext(
            'exception.forbidden_action',
            \sprintf('The requested "%s" action is not allowed for the "%s" document. Solution: remove the "%s" action from the "disabled_actions" option, which can be configured globally for the entire backend or locally for the "%s" document.', $parameters['action'], $parameters['document_name'], $parameters['action'], $parameters['document_name']),
            $parameters,
            403
        );

        parent::__construct($exceptionContext);
    }
}
