<?php

namespace Ninja\Database\Core;

use PDO;

class Orm
{
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }
    public function save(object $entity): void 
    {
        $table = MetadateReader::getTableMetadata($entity);
        $columns = MetadateReader::getColumnMetadata($entity);

        $fields = [];
        $spaceholders = [];
        $values = [];

        foreach($columns as $column){
            $fields[] = $column['column']->name;
            $spaceholders[] = ":" . $column['property'];
            $values[$column['property']] = $entity->{$column['property']};
        }

        $sql = "INSERT INTO $table(". implode(",", $fields) .") VALUES(". implode(",", $spaceholders) .")";
        $stmt  = $this->pdo->prepare($sql);
        $stmt->execute($values);
    }
}