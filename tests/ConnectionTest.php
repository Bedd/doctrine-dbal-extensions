<?php
namespace Bedd\Doctrine\Dbal;

use Doctrine\DBAL\Types\Type;
use Doctrine\DBAL\Schema\Table;
use Doctrine\DBAL\Schema\Column;

/**
 * ConnectionTest
 */
class ConnectionTest extends \PHPUnit_Framework_TestCase
{
    /** @var \Bedd\Doctrine\Dbal\Connection */
    private $con = null;

    public function setUp()
    {
        $config = new \Doctrine\DBAL\Configuration();
        $connectionParams = array(
            'url' => 'sqlite:///:memory:',
            'wrapperClass' => Connection::class,
        );
        $this->con = \Doctrine\DBAL\DriverManager::getConnection($connectionParams, $config);

        $sm = $this->con->getSchemaManager();

        $table_user = new Table('table_user', array(
            new Column('id', \Doctrine\DBAL\Types\Type::getType('integer'))
        ));
        $sm->createTable($table_user);
    }

    /**
     * Test for Bedd\Doctrine\Dbal\Connection::getModel
     *
     * @expectedException Doctrine\DBAL\Schema\SchemaException
     */
    public function testGetModelException()
    {
        $this->con->getModel('table_not_exits');
    }

    /**
     * Test for Bedd\Doctrine\Dbal\Connection::getModel
     */
    public function testGetModel()
    {
        /** @var $model \Bedd\Doctrine\Dbal\Model */
        $model = $this->con->getModel('table_user');
        $this->assertInstanceOf(Model::class, $model);
    }
}
