<?php
namespace Ninja\Database\Attributes;

/**
 * The Entity attribute class is used to define an entity with a specific name.
 * This attribute can be applied to classes to provide metadata about the entity.
 */
#[\Attribute]
class Entity
{
    /**
     * Constructor for the Entity attribute.
     *
     * @param string $name The name of the entity.
     */
    public function __construct(public string $name){}
}