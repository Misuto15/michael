<?php
namespace Aheadworks\Blog\Controller\Category\View;

/**
 * Interceptor class for @see \Aheadworks\Blog\Controller\Category\View
 */
class Interceptor extends \Aheadworks\Blog\Controller\Category\View implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \Magento\Framework\Controller\Result\ForwardFactory $resultForwardFactory, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\Registry $coreRegistry, \Aheadworks\Blog\Api\CategoryRepositoryInterface $categoryRepository, \Aheadworks\Blog\Api\PostRepositoryInterface $postRepository, \Aheadworks\Blog\Api\TagRepositoryInterface $tagRepository, \Aheadworks\Blog\Model\Config $config, \Aheadworks\Blog\Model\Url $url)
    {
        $this->___init();
        parent::__construct($context, $resultPageFactory, $resultForwardFactory, $storeManager, $coreRegistry, $categoryRepository, $postRepository, $tagRepository, $config, $url);
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
