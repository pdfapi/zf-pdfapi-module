<?php

/**
 * Created by IntelliJ IDEA.
 * User: tobre
 * Date: 07/11/2016
 * Time: 17:37
 */

namespace PdfApi;

class Module
{
    const VERSION = '1.0.0';

    public function getConfig()
    {
        return include __DIR__ . '/../../config/module.config.php';
    }
}