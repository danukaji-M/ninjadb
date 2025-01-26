<?php

namespace Database;

use Ninja\Attributes\Table;
use Ninja\Attributes\Column;

#[Table('users')]
class User
{
    #[Column('id', 'int', primary: true, autoIncrement: true)]
    public int $id;

    #[Column('name', 'varchar', length: 255)]
    public string $name;

    #[Column('email', 'varchar', length: 255)]
    public string $email;

    #[Column('password', 'varchar', length: 255)]
    public string $password;

    public function setId(int $id): void
    {
        $this->id = $id;
    }
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
        ];
    }
}