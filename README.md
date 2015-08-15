# Doctrine UUID Generator library
Enables support for UUIDv4 as IDs of Doctrine entities.

UUIDv4 creation is based on the awesome [ramsey/uuid](https://github.com/ramsey/uuid) library. Currently only UUIDs as strings are supported.

## Installation

It is recommended to use Composer. You can run the following command to add the library to your requirements in `composer.json`:

    composer require "kiefernwald/doctrine-uuid-generator=~1.0"

## Usage example

You can just use it as CustomIdGenerator. If you are using Annotations, your code should like this:

```php
<?php

// ...

use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\CustomIdGenerator;

/**
 * Class MyAwesomeEntity
 *
 * @Entity
 * ...
 */
class MyAwesomeEntity
{
    /**
     * @var string $uuid
     * @Column(name="uuid", type="string")
     * @Id
     * @GeneratedValue(strategy="CUSTOM")
     * @CustomIdGenerator(class="Kiefernwald\DoctrineUuid\Doctrine\ORM\UuidGenerator")
     */
    protected $uuid;

    // ...
}
```
