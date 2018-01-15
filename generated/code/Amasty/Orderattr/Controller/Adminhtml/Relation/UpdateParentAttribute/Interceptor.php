<?php
namespace Amasty\Orderattr\Controller\Adminhtml\Relation\UpdateParentAttribute;

/**
 * Interceptor class for @see \Amasty\Orderattr\Controller\Adminhtml\Relation\UpdateParentAttribute
 */
class Interceptor extends \Amasty\Orderattr\Controller\Adminhtml\Relation\UpdateParentAttribute implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Registry $coreRegistry, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \Amasty\Orderattr\Api\RelationRepositoryInterface $relationRepository, \Amasty\Orderattr\Model\RelationFactory $relationFactory, \Magento\Framework\Json\EncoderInterface $jsonEncoder, \Amasty\Orderattr\Model\Relation\AttributeOptionsProvider $optionsProvider, \Amasty\Orderattr\Model\Relation\DependentAttributeProvider $attributeProvider)
    {
        $this->___init();
        parent::__construct($context, $coreRegistry, $resultPageFactory, $relationRepository, $relationFactory, $jsonEncoder, $optionsProvider, $attributeProvider);
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        if (!$pluginInfo) {
            return parent::dispatch($request);
        } else {
            return $this->___callPlugins('dispatch', func_get_args(), $pluginInfo);
        }
    }
}
