<?php
namespace Aheadworks\Followupemail\Model\Template;

/**
 * Interceptor class for @see \Aheadworks\Followupemail\Model\Template
 */
class Interceptor extends \Aheadworks\Followupemail\Model\Template implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Model\Context $context, \Magento\Framework\View\DesignInterface $design, \Magento\Framework\Registry $registry, \Magento\Store\Model\App\Emulation $appEmulation, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\View\Asset\Repository $assetRepo, \Magento\Framework\Filesystem $filesystem, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\Email\Model\Template\Config $emailConfig, \Magento\Email\Model\TemplateFactory $templateFactory, \Magento\Framework\Filter\FilterManager $filterManager, \Magento\Framework\UrlInterface $urlModel, \Magento\Email\Model\Template\FilterFactory $filterFactory, \Aheadworks\Followupemail\Model\Template\FilterFactory $fueFilterFactory, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $design, $registry, $appEmulation, $storeManager, $assetRepo, $filesystem, $scopeConfig, $emailConfig, $templateFactory, $filterManager, $urlModel, $filterFactory, $fueFilterFactory, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getProcessedTemplate(array $variables = array())
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getProcessedTemplate');
        if (!$pluginInfo) {
            return parent::getProcessedTemplate($variables);
        } else {
            return $this->___callPlugins('getProcessedTemplate', func_get_args(), $pluginInfo);
        }
    }
}
