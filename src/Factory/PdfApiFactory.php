<?php

/**
 * Created by IntelliJ IDEA.
 * User: tobre
 * Date: 07/11/2016
 * Time: 17:41
 */

namespace PdfApi\Factory;

use Interop\Container\ContainerInterface;
use PdfApi\PdfApi;
use Zend\ServiceManager\Factory\FactoryInterface;

class PdfApiFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container,
                             $requestedName, array $options = null)
    {
        $service = new PdfApi($container->get('config')['pdfapi']['apiKey']);
        return $service;
    }
}