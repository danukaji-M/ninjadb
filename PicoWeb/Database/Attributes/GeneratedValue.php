<?php 

namespace PicoWeb\Database\Attributes;

/**
 * The GeneratedValue attribute class is used to define the generation strategy for the primary key of an entity.
 * This attribute can be applied to properties to provide metadata about the primary key generation strategy.
 */
#[\Attribute]
class GeneratedValue
{
    /**
     * Constructor for the GeneratedValue attribute.
     *
     * @param string $strategy The generation strategy for the primary key.
     */
    public function __construct(public string $strategy= 'AUTO'){}
}