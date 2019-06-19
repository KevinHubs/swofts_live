<?php

namespace Swoft\Tcp\Server\Bean\Parser;

use Swoft\Bean\Annotation\Scope;
use Swoft\Bean\Parser\AbstractParser;
use Swoft\Tcp\Server\Bean\Collector\ServiceCollector;
use Swoft\Tcp\Server\Bean\Annotation\Service;

/**
 * Service annotation parser
 */
class ServiceParser extends AbstractParser
{
    /**
     * @param string  $className
     * @param Service $objectAnnotation
     * @param string  $propertyName
     * @param string  $methodName
     * @param null    $propertyValue
     * @return mixed
     */
    public function parser(
        string $className,
        $objectAnnotation = null,
        string $propertyName = '',
        string $methodName = '',
        $propertyValue = null
    ) {
        $beanName = $className;
        $scope = Scope::SINGLETON;

        ServiceCollector::collect($className, $objectAnnotation, $propertyName, $methodName, $propertyValue);

        return [$beanName, $scope, ''];
    }
}
