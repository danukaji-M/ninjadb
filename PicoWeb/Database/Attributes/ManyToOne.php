<?php

namespace Ninja\Database\Attributes;
/**
 * Represents a Many-to-One relationship attribute.
 * 
 * This attribute is used to define a many-to-one relationship between entities.
 * 
 * @Attribute
 */
class ManyToOne
{
    /**
     * Constructor for the ManyToOne attribute.
     * 
     * @param string $targetEntity The target entity that the current entity relates to.
     * @param bool $cascade If cascading actions should be performed (e.g., DELETE, UPDATE).
     * @param bool $fetchLazy Whether the relationship should be loaded lazily.
     */
    public function __construct(
        public string $targetEntity,
        public bool $cascade = false,
        public bool $fetchLazy = false,
    ){}
}
