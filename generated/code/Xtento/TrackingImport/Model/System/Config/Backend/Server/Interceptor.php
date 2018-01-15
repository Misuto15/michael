<?php
namespace Xtento\TrackingImport\Model\System\Config\Backend\Server;

/**
 * Interceptor class for @see \Xtento\TrackingImport\Model\System\Config\Backend\Server
 */
class Interceptor extends \Xtento\TrackingImport\Model\System\Config\Backend\Server implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Model\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\App\RequestInterface $request, \Magento\Framework\App\Config\ScopeConfigInterface $config, \Magento\Framework\App\Cache\TypeListInterface $cacheTypeList, \Xtento\XtCore\Helper\Server $serverHelper, \Xtento\TrackingImport\Helper\Module $moduleHelper, \Magento\Framework\UrlInterface $urlBuilder, \Magento\Framework\Module\ModuleListInterface $moduleList, \Magento\Framework\Model\ResourceModel\AbstractResource $resource = null, \Magento\Framework\Data\Collection\AbstractDb $resourceCollection = null, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $registry, $request, $config, $cacheTypeList, $serverHelper, $moduleHelper, $urlBuilder, $moduleList, $resource, $resourceCollection, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function afterSave()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'afterSave');
        if (!$pluginInfo) {
            return parent::afterSave();
        } else {
            return $this->___callPlugins('afterSave', func_get_args(), $pluginInfo);
        }
    }
}
