<?php
namespace Xtento\TrackingImport\Model\Import\Condition\Action;

/**
 * Interceptor class for @see \Xtento\TrackingImport\Model\Import\Condition\Action
 */
class Interceptor extends \Xtento\TrackingImport\Model\Import\Condition\Action implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Rule\Model\Condition\Context $context, \Magento\Framework\Event\ManagerInterface $eventManager, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $eventManager, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getOperatorSelectOptions()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getOperatorSelectOptions');
        if (!$pluginInfo) {
            return parent::getOperatorSelectOptions();
        } else {
            return $this->___callPlugins('getOperatorSelectOptions', func_get_args(), $pluginInfo);
        }
    }
}
