<?php

namespace Swoft\Tcp\Server\Bean\Annotation;

/**
 * Service annotation
 *
 * @Annotation
 * @Target("CLASS")
 */
class Tcp
{
    /**
     * @var string
     */
    private $version = "0";

    /**
     * Service constructor.
     *
     * @param array $values
     */
    public function __construct(array $values)
    {
//        if (isset($values['value'])) {
//            $this->version = $values['value'];
//        }
//        if (isset($values['version'])) {
//          // $this->version = $values['version'];
//        }

        //var_dump($this->version);
    }

    /**
     * @return string
     */
    public function getVersion(): string
    {
       // return $this->version;
    }
}
