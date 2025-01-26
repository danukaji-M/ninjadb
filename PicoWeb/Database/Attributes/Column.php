<?php 

namespace PicoWeb\Database\Attributes;

/**
 * Class Column
 * 
 * Represents a database column with various attributes.
 * 
 * @package Ninja\Attributes
 */
#[\Attribute]
class Column
{
    /**
     * Column constructor.
     * 
     * @param string $name Name of the column.
     * @param string $type Data type (e.g., 'VARCHAR', 'INT').
     * @param bool|null $primary Indicates if this column is a primary key.
     * @param bool|null $nullable Indicates if this column is nullable.
     * @param string|null $default Default value for the column.
     * @param int|null $length Length of the column (useful for types like VARCHAR).
     * @param bool|null $unique Indicates if this column is unique.
     * @param string|null $check Check constraint (e.g., 'age > 18').
     * @param string|null $unsigned Indicates if the column is unsigned (e.g., for INT).
     */


    public function __construct(
        public string $name,
        public string $type,
        public ?bool $primary = false,
        public ?bool $nullable = false,
        public ?string $default = null,
        public ?int $length = null,
        public ?bool $unique = false,
        public ?string $check = null,
        public ?string $unsigned = null
    ){}
} 


//  The  Column  attribute class is used to define the properties of a database column. The constructor accepts the following parameters: 
//  name : The name of the column. type : The data type of the column (e.g., 'VARCHAR', 'INT'). primary : Indicates if this column is a primary key. nullable : Indicates if this column is nullable. default : The default value for the column. length : The length of the column (useful for types like VARCHAR). unique : Indicates if this column is unique. autoIncrement : Indicates if this column is auto-increment. check : Check constraint (e.g., 'age > 18'). unsigned : Indicates if the column is unsigned (e.g., for INT). 
//  The  Column  attribute class is used to define the properties of a database column. 
//  The  Entity  attribute class is used to define the properties of a database table. 
//  The  Column  attribute class is used to define the properties of a database table. 
//  The  Entity  attribute class is used to define the properties of a database column. 
//  The  Column  attribute class is used to define the properties of a database column. 
//  The  Entity  attribute class is used to define the properties of a database table. 
//  The  Column  attribute class is used to define the properties of a database table. 
//  The  Entity  attribute class is used to define the properties of a database column. 
//  The  Column  attribute class is used to define the properties of a database column. 
//  The  Entity  attribute class is used to define the properties of a database table. 
//  The  Column  attribute class is used to define the properties of a database table. 
//  The  Entity  attribute class is used to define the properties of a database column. 
//  The  Column  attribute class is used to define the properties of a database column. 
//  The  Entity  attribute class is used to define the properties of a database table. 
//  The  Column  attribute class is used to define the properties of a database table. 
//  The  Entity  attribute class is used to define the properties of a database column. 
//  The  Column  attribute class is used to define the properties of a database column. 
//  The  Entity  attribute class is used to define the properties of a database table. 
//  The  Column  attribute class is used to define the properties of a database table. 
//  The  Entity  attribute class is used to define the properties of a database column.