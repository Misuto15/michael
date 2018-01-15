<?php
namespace Aheadworks\Followupemail\Controller\Adminhtml\Queue\Preview;

/**
 * Interceptor class for @see \Aheadworks\Followupemail\Controller\Adminhtml\Queue\Preview
 */
class Interceptor extends \Aheadworks\Followupemail\Controller\Adminhtml\Queue\Preview implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Aheadworks\Followupemail\Model\QueueFactory $queueFactory, \Magento\Framework\Registry $registry)
    {
        $this->___init();
        parent::__construct($context, $queueFactory, $registry);
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
