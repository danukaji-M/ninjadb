<?php

namespace Ninja\Core;

use Reflection;
use ReflectionClass;

class MetadateReader
{
    public static function getTableMetadata(object $entity):string
    {
        $reflectionClass = new ReflectionClass($entity);

        $attributes = $reflectionClass->getAttributes(\Database\User::class);

        if(count($attributes)>0){
            return $attributes[0]->newInstance()->name;
        }
        throw new \Exception("Table attibute not found for class" . $reflectionClass->getName());
    }

    public static function getColumnMetadata(object $entity):array
    {
        $columns = [];
        $reflectionClass = new ReflectionClass($entity);
        
        foreach($reflectionClass->getProperties() as $property){
            $attributes = $property->getAttributes(\Database\User::class);
            if(count($attributes)>0){
                $columns [] = [
                    "property"=> $property->getName(),
                    "column" => $attributes[0]->newInstance(),
                ];
            }
        }
        return $columns;
    }
}