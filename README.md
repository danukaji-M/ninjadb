# **Under Development**
# MyORM - A Modern PHP ORM

MyORM is a lightweight, powerful, and developer-friendly Object-Relational Mapper (ORM) for PHP. It combines the best features of existing ORMs like Doctrine and Eloquent while introducing innovative functionalities such as dynamic schema updates, GraphQL-like queries, and AI-powered query optimization. MyORM simplifies database interactions, enhances productivity, and supports modern database technologies like NoSQL and graph databases.

---

## **Key Features**

- **Annotations/Attributes-Based Mapping**: Define database mappings using PHP annotations or attributes.
- **Zero Configuration**: Automatically detect entities and mappings without complex configuration files.
- **Dynamic Schema Updates**: Update database schemas automatically based on entity changes.
- **Custom Query Builder**: Use an intuitive, chainable query builder for complex queries.
- **GraphQL-Like Queries**: Perform nested queries declaratively.
- **Lifecycle Hooks**: Support for `beforeInsert`, `afterUpdate`, and other entity lifecycle events.
- **Data Transformations**: Automatically hash, encrypt, or transform entity data.
- **Relationship Management**: Includes polymorphic relationships and custom join conditions.
- **Query & Entity Caching**: Built-in support for caching queries and serialized entities.
- **Multi-Database Support**: Easily connect to multiple databases or shards.
- **JSON and NoSQL Support**: Native handling of JSON columns and integration with NoSQL databases.
- **Schema Visualization**: Auto-generate visual diagrams of the database schema.
- **AI Query Optimization**: Optimize queries using machine learning insights.
- **Event Sourcing**: Built-in support for event sourcing to track changes over time.
- **Plugin System**: Extend functionality with custom plugins.

---

## **Installation**

Install MyORM using Composer:

```bash
composer require ninja/db
```

---

## **Getting Started**

### **1. Define an Entity**

Use PHP attributes to define your database entities:

```php
<?php

use MyORM\Attributes\Entity;
use MyORM\Attributes\Column;
use MyORM\Attributes\Id;

#[Entity(table: "users")]
class User
{
    #[Id]
    #[Column(type: "int", autoIncrement: true)]
    private int $id;

    #[Column(type: "string", length: 255)]
    private string $username;

    #[Column(type: "string", length: 255, transform: "hash")]
    private string $password;

    // Getters and setters...
}
```

---

### **2. Configure the ORM**

Create a configuration file or use the default settings:

```php
<?php

require 'vendor/autoload.php';

use MyORM\Config\ORMConfig;
use MyORM\ORM;

$config = new ORMConfig([
    'database' => [
        'driver' => 'mysql',
        'host' => '127.0.0.1',
        'dbname' => 'my_database',
        'user' => 'root',
        'password' => '',
    ],
]);

$orm = new ORM($config);
```

---

### **3. Perform Database Operations**

#### **Insert a Record**
```php
$user = new User();
$user->setUsername('john_doe');
$user->setPassword('secure_password');

$orm->persist($user);
$orm->flush();
```

#### **Fetch Records**
```php
$users = $orm->query(User::class)
    ->where('username', '=', 'john_doe')
    ->get();
```

#### **Update a Record**
```php
$user = $orm->find(User::class, 1);
$user->setUsername('johndoe_updated');

$orm->flush();
```

#### **Delete a Record**
```php
$user = $orm->find(User::class, 1);
$orm->remove($user);
$orm->flush();
```

---

## **Advanced Features**

### **GraphQL-Like Nested Queries**
Fetch related entities declaratively:
```php
$users = $orm->query(User::class, [
    'fields' => ['id', 'username'],
    'relations' => [
        'profile' => ['fields' => ['bio', 'photo_url']]
    ]
]);
```

### **Dynamic Schema Updates**
Automatically update your database schema:
```bash
php myorm schema:update
```

### **Event Sourcing**
Track all changes with immutable event logs:
```php
$events = $orm->getEventLog(User::class);
```

### **AI Query Optimization**
Optimize your queries dynamically:
```php
$orm->optimizeQueries();
```

---

## **Schema Visualization**
Generate a visual representation of your database schema:
```bash
php myorm schema:visualize
```

---

## **Plugin System**
Extend MyORM with plugins:
```php
$orm->usePlugin(new AuditLoggerPlugin());
```

---

## **Supported Databases**
- MySQL
- PostgreSQL
- SQLite
- MongoDB (NoSQL)
- Neo4j (Graph Database)

---

## **Contributing**
We welcome contributions! To get started:
1. Fork the repository.
2. Create a new branch for your feature or fix.
3. Submit a pull request.

---

## **License**
MyORM is open-source software licensed under the MIT License.

---

## **Contact**
For questions or support, contact us at [support@ninjaweb.com](mailto:support@ninjaweb.com).
