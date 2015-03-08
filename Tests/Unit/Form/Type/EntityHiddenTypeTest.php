<?php
/**
 * This file is part of the Clastic package.
 *
 * (c) Dries De Peuter <dries@nousefreak.be>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Clastic\BackofficeBundle\Tests\Unit\Form\Type;

use Clastic\AliasBundle\Form\Type\AliasType;
use Clastic\BackofficeBundle\Form\Type\DatePickerType;
use Clastic\BackofficeBundle\Form\Type\EntityHiddenType;
use Doctrine\ORM\Tools\SchemaTool;
use Symfony\Bridge\Doctrine\Form\DoctrineOrmExtension;
use Symfony\Bridge\Doctrine\Form\Type\DoctrineType;
use Symfony\Bridge\Doctrine\Test\DoctrineTestHelper;
use Symfony\Component\Form\FormBuilder;
use Symfony\Component\Form\Test\TypeTestCase;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;

/**
 * @author Dries De Peuter <dries@nousefreak.be>
 *
 * @group functional
 */
class EntityHiddenTypeTest extends TypeTestCase
{
    public function testParent()
    {
        $om = $this->getMockBuilder('Doctrine\Common\Persistence\ObjectManager')
            ->disableOriginalConstructor()
            ->getMock();

        $type = new EntityHiddenType($om);

        $this->assertEquals('hidden', $type->getParent());
    }
}
