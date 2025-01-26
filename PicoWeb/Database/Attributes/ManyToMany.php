<?php

namespace PicoWeb\Database\Attributes;

/**
 * Attribute to define a Many-to-Many relationship between entities.
 * 
 * This attribute is used to specify the target entity, cascading actions,
 * fetch strategy, mapping property, and custom join table name for a 
 * many-to-many relationship in an ORM context.
 */
#[\Attribute]
class ManyToMany
{
    /**
     * Constructor for the ManyToMany attribute.
     *
     * @param string $targetEntity The target entity that the current entity relates to.
     * @param bool $cascade If cascading actions should be performed (e.g., DELETE, UPDATE).
     * @param bool $fetchLazy Whether the relationship should be loaded lazily.
     * @param string|null $mappedBy The property name on the target entity that maps this relationship (for bidirectional relationships).
     * @param string|null $joinTable Custom name for the join table (if needed).
     */
    public function __construct(
        public string $targetEntity,
        public bool $cascade = false,
        public bool $fetchLazy = false,
        public ?string $mappedBy = null,
        public ?string $joinTable = null
    ){}
}
