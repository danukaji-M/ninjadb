<?php

namespace Ninja\Database\Attributes;

#[\Attribute]
class OneToMany
{
    /**
     * Represents a one-to-many relationship between entities.
     * 
     * This attribute is used to define a one-to-many relationship between the current entity and a target entity.
     * 
     * @param string $targetEntity The target entity that the current entity relates to.
     * @param string $mappedBy The property name on the target entity that maps this relationship.
     * @param bool $cascade If cascading actions should be performed (e.g., DELETE, UPDATE).
     */
    public function __construct(
        public string $targetEntity,    // The target entity that the current entity relates to
        public string $mappedBy,        // The property name on the target entity that maps this relationship
        public bool $cascade = false,   // If cascading actions should be performed (e.g., DELETE, UPDATE)
    ) {}
}
