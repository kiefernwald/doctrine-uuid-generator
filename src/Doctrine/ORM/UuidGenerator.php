<?php

namespace Kiefernwald\DoctrineUuid\Doctrine\ORM;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Id\AbstractIdGenerator;
use Rhumsaa\Uuid\Doctrine\UuidType;
use Rhumsaa\Uuid\Uuid;


/**
 * Class UuidGenerator
 *
 * ID generator for doctrine entities to generate UUIDv4
 *
 * @package Kiefernwald\DoctrineUuid\Doctrine\ORM
 * @author Thomas Bretzke <thomas.bretzke@kiefernwald.net>
 * @copyright (c) 2015 Kiefernwald UG (haftungsbeschränkt)
 * @license http://opensource.org/licenses/MIT MIT
 */
class UuidGenerator extends AbstractIdGenerator
{
    /**
     * Generates an identifier for an entity.
     *
     * @param \Doctrine\ORM\EntityManager $em
     * @param \Doctrine\ORM\Mapping\Entity $entity
     *
     * @return mixed
     */
    public function generate(EntityManager $em, $entity)
    {
        return Uuid::uuid4()->toString();
    }

    public function isPostInsertGenerator()
    {
        return false;
    }
}
