<?php

namespace Slim\Tests\Views;

use Slim\Views\Blade;

require __DIR__ . '/../vendor/autoload.php';

class BladeTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Blade
     */
    protected $view;

    public function setUp()
    {
        $this->view = new Blade([__DIR__ . '/templates', __DIR__ . '/another'], __DIR__ . '/../data/cache');
    }

    public function testFetch()
    {
        $output = $this->view->fetch('example', [
            'name' => 'Josh',
        ]);
        $this->assertEquals("<p>Hi, my name is Josh.</p>\n", $output);
    }

    public function testSingleTemplateWithANamespace()
    {
        $views = new Blade([
            'One' => __DIR__ . '/templates',
        ]);
        $output = $views->fetch('example', [
            'name' => 'Josh',
        ]);
        $this->assertEquals("<p>Hi, my name is Josh.</p>\n", $output);
    }

    public function testMultipleTemplatesWithMulNamespace()
    {
        $views = new Blade([
            'One' => __DIR__ . '/templates',
            'Two' => __DIR__ . '/another',
        ]);
        $outputOne = $views->fetch('example', [
            'name' => 'Peter',
        ]);
        $outputTwo = $views->fetch('example2', [
            'name'   => 'Peter',
            'gender' => 'male',
        ]);
        $this->assertEquals("<p>Hi, my name is Peter.</p>\n", $outputOne);
        $this->assertEquals("<p>Hi, my name is Peter and I am male.</p>\n", $outputTwo);
    }

    public function testRender()
    {
        $mockBody = $this->getMockBuilder('Psr\Http\Message\StreamInterface')
            ->disableOriginalConstructor()
            ->getMock();
        $mockResponse = $this->getMockBuilder('Psr\Http\Message\ResponseInterface')
            ->disableOriginalConstructor()
            ->getMock();
        $mockBody->expects($this->once())
            ->method('write')
            ->with("<p>Hi, my name is Josh.</p>\n")
            ->willReturn(28);
        $mockResponse->expects($this->once())
            ->method('getBody')
            ->willReturn($mockBody);
        $response = $this->view->render($mockResponse, 'example', [
            'name' => 'Josh',
        ]);
        $this->assertInstanceOf('Psr\Http\Message\ResponseInterface', $response);
    }
}