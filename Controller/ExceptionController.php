<?php

namespace JDecool\Bundle\ExceptionHelpBundle\Controller;

use Symfony\Bundle\TwigBundle\Controller\ExceptionController as BaseController;
use Symfony\Component\HttpFoundation\Request;

class ExceptionController extends BaseController
{
    /**
     * {@inheritdoc}
     */
    protected function findTemplate(Request $request, $format, $code, $showException)
    {
        return '@JDecoolExceptionHelp/Exception/exception.html.twig';
    }
}
