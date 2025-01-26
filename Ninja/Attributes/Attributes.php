<?php

namespace Ninja\Attributes;

#[\Attribute]
class Table
{
    public function __construct(public string $name){}
}

#[\Attribute]
class Column
{
    public function __construct(
        public string $name,
        public string $type,
        public ?bool $primary = false,
        public ?bool $autoIncement = false,
        public ?int $length = null
    ){}
}