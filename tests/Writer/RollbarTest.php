<?php

namespace LosMiddleware\LosLog\Writer;

use Zend\Log\Logger;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2015-11-02 at 10:24:11.
 */
class RollbarTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Rollbar
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new Rollbar(new \RollbarNotifier([]));
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @covers LosMiddleware\LosLog\Writer\Rollbar::setFormatter
     */
    public function testSetFormatter()
    {
        $this->assertSame($this->object, $this->object->setFormatter(''));
    }

    /**
     * @covers LosMiddleware\LosLog\Writer\Rollbar::__construct
     * @covers LosMiddleware\LosLog\Writer\Rollbar::doWrite
     */
    public function testdoWrite()
    {
        $event = [
            'timestamp' => new \DateTime(),
            'priority' => (int) Logger::ALERT,
            'priorityName' => 'ALERT',
            'message' => 'testing',
            'extra' => [],
        ];

        $method = new \ReflectionMethod(
            'LosMiddleware\LosLog\Writer\Rollbar',
            'doWrite'
        );

        $method->setAccessible(true);

        $method->invoke($this->object, $event);
    }
}
