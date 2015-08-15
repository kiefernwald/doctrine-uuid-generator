# Doctrine UUID Generator library
Enables support for UUIDv4 as IDs of Doctrine entities.

UUIDv4 creation is based on the awesome [ramsey/uuid](https://github.com/ramsey/uuid) library. Currently this library only supports the UUIDs as strings.

## Installation

It is recommended to use Composer. You can run the following command to add the library to your requirements in `composer.json`:

    composer require "kiefernwald/doctrine-uuid-generator=~1.0"

## Usage example

You can just use it as CustomIdGenerator. If you are using Annotations, your code should like this:

```php
<?php
// ...

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