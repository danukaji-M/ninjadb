<?php

namespace PicoWeb\Database\Attributes;

/**
 * Class JoinColumn
 * 
 * Represents a join column in a database table, typically used for foreign key constraints.
 * 
 * @package Ninja\Attributes
 */

 
#[\Attribute]
class JoinColumn
{
    /**
     * JoinColumn constructor.
     * 
     * @param string $name The name of the foreign key column.
     * @param string $referencedTable The table referenced by the foreign key.
     * @param string $referencedColumnName The column referenced by the foreign key.
     * @param bool|null $nullable Indicates if the join column is nullable. Defaults to true.
     * @param string|null $onDelete Action to take on delete (e.g., 'CASCADE', 'SET NULL', 'RESTRICT'). Defaults to 'CASCADE'.
     * @param string|null $onUpdate Action to take on update (e.g., 'CASCADE', 'SET NULL', 'RESTRICT'). Defaults to 'CASCADE'.
     */
    public function __construct(
        public string $name,
        public string $referencedTable,
        public string $referencedColumnName,
        public ?bool $nullable = true,
        public ?string $onDelete = 'CASCADE',
        public ?string $onUpdate = 'CASCADE'
    ){}
}
