<?php

namespace Kiefernwald\DoctrineUuid\Tests\Doctrine\ORM;
use Doctrine\ORM\Mapping\Entity;
use Kiefernwald\DoctrineUuid\Doctrine\ORM\UuidGenerator;

/**
 * Class UuidGeneratorTest
 *
 * Unit tests for UuidGenerator
 *
 * @package Kiefernwald\DoctrineUuid\Tests\Doctrine\ORM
 * @author Thomas Bretzke <thomas.bretzke@kiefernwald.net>
 * @copyright (c) 2015 Kiefernwald UG (haftungsbeschränkt)
 * @license http://opensource.org/licenses/MIT MIT
 */
class UuidGeneratorTest extends \PHPUnit_Framework_TestCase
{
    /** @var UuidGenerator $uuidGenerator */
    protected $uuidGenerator;

    /** @var \PHPUnit_Framework_MockObject_MockObject $manager */
    protected $manager;

    /**
     * Setup method
     */
    protected function setUp()
    {
        $this->manager = $this
            ->getMockBuilder('Doctrine\ORM\EntityManager')
            ->disableOriginalConstructor()
            ->getMock();

        $this->uuidGenerator = new UuidGenerator();
    }

    /**
     * Unit test for generate
     */
    public function testGenerate()
    {
        $this->assertRegExp(
            '/^[0-9a-f]{8}-[0-9a-f]{4}-4[0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$/',
            $this->uuidGenerator->generate(
                $this->manager,
                new Entity()
            )
        );
    }

    /**
     * Unit test for isPostInsertGenerator
     */
    public function testIsPostInsertGenerator()
    {
        $this->assertFalse($this->uuidGenerator->isPostInsertGenerator());
    }
}
