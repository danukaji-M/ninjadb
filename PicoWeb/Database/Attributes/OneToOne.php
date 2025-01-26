<?php

namespace Ninja\Database\Attributes;

/**
 * Class OneToOne
 *
 * This attribute is used to define a one-to-one relationship between entities.
 *
 * @package Ninja\Attributes
 */
#[\Attribute]
class OneToOne
{
    /**
     * OneToOne constructor.
     *
     * @param string $targetEntity The target entity that the current entity relates to.
     * @param bool $cascade If cascading actions should be performed (e.g., DELETE, UPDATE).
     * @param bool $orphanRemoval If orphan records should be removed automatically.
     */
    public function __construct(
        public string $targetEntity,
        public bool $cascade = false,
        public bool $orphanRemoval = false,
    ){}
}
