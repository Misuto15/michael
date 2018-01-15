<?php
namespace Aheadworks\Blog\Controller\Adminhtml\Post\Edit;

/**
 * Interceptor class for @see \Aheadworks\Blog\Controller\Adminhtml\Post\Edit
 */
class Interceptor extends \Aheadworks\Blog\Controller\Adminhtml\Post\Edit implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Aheadworks\Blog\Api\PostRepositoryInterface $postRepository, \Magento\Framework\View\Result\PageFactory $resultPageFactory)
    {
        $this->___init();
        parent::__construct($context, $postRepository, $resultPageFactory);
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
