<?php
/**
 * Aheadworks Inc.
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the EULA
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://ecommerce.aheadworks.com/end-user-license-agreement/
 *
 * @package    RewardPoints
 * @version    1.7.2
 * @copyright  Copyright (c) 2020 Aheadworks Inc. (http://www.aheadworks.com)
 * @license    https://ecommerce.aheadworks.com/end-user-license-agreement/
 */
namespace Aheadworks\RewardPoints\Test\Unit\Ui\Component\Listing\Columns;

use Aheadworks\RewardPoints\Ui\Component\Listing\Columns\CustomerName;
use Magento\Framework\UrlInterface;
use Magento\Framework\View\Element\UiComponent\Processor;
use Magento\Framework\View\Element\UiComponent\ContextInterface;
use Magento\Framework\TestFramework\Unit\Helper\ObjectManager;

/**
 * Class Aheadworks\RewardPoints\Test\Unit\Ui\Component\Listing\Columns\Transaction\CustomerNameTest
 */
class CustomerNameTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var CustomerName
     */
    private $object;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject|ContextInterface
     */
    private $contextMock;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject|UrlInterface
     */
    private $urlBuilderMock;

    /**
     * Init mocks for tests
     *
     * @return void
     */
    protected function setUp(): void
    {
        $objectManager = new ObjectManager($this);

        $this->urlBuilderMock = $this->getMockBuilder(UrlInterface::class)
            ->disableOriginalConstructor()
            ->setMethods(['getUrl'])
            ->getMockForAbstractClass();

        $this->contextMock = $this->getMockBuilder(ContextInterface::class)
            ->setMethods(
                [
                    'getProcessor',
                ]
            )
            ->getMockForAbstractClass();

        $processor = $this->getMockBuilder(Processor::class)
            ->disableOriginalConstructor()
            ->getMock();
        $this->contextMock->expects($this->any())
            ->method('getProcessor')
            ->willReturn($processor);

        $data = [
            'urlBuilder' => $this->urlBuilderMock,
            'context' => $this->contextMock,
            'data' =>
                [
                    'name' => 'customer_name',
                ]
        ];

        $this->object = $objectManager->getObject(CustomerName::class, $data);
    }

    /**
     * Test prepareDataSource with custom array
     */
    public function testPrepareDataSourceMethodTestArray()
    {
        $dataSource1 = ['test1' => 1, 'test2' => 2];
        $this->assertEquals($dataSource1, $this->object->prepareDataSource($dataSource1));

        $dataSource2 = [];
        $this->assertEquals($dataSource2, $this->object->prepareDataSource($dataSource2));
    }

    /**
     * Test prepareDataSource if null items
     */
    public function testPrepareDataSourceMethodDataNullItems()
    {
        $dataSource = [
            'data' => [
                'items' => [
                    [],
                    [],
                ]
            ]
        ];

        $this->assertEquals($dataSource, $this->object->prepareDataSource($dataSource));
    }

    /**
     * Test prepareDataSource method
     */
    public function testPrepareDataSourceMethod()
    {
        $dataSource = [
            'data' => [
                'items' => [
                    ['customer_id' => 5, 'customer_name' => 'Test Test'],
                ]
            ]
        ];
        $dataSourceExpected = [
            'data' => [
                'items' => [
                    [
                        'customer_id' => 5,
                        'customer_name' => [
                            'url' => 'customer/index/edit/id/5',
                            'text' => 'Test Test',
                        ],
                    ],
                ]
            ]
        ];

        $this->urlBuilderMock->expects($this->once())
            ->method('getUrl')
            ->with('customer/index/edit', ['id' => 5])
            ->willReturn('customer/index/edit/id/5');

        $this->assertEquals($dataSourceExpected, $this->object->prepareDataSource($dataSource));
    }
}
