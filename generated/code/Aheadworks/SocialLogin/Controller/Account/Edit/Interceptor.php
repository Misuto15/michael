<?php
namespace Aheadworks\SocialLogin\Controller\Account\Edit;

/**
 * Interceptor class for @see \Aheadworks\SocialLogin\Controller\Account\Edit
 */
class Interceptor extends \Aheadworks\SocialLogin\Controller\Account\Edit implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Psr\Log\LoggerInterface $logger, \Aheadworks\SocialLogin\Model\Config\General $generalConfig, \Aheadworks\SocialLogin\Helper\State $stateHelper)
    {
        $this->___init();
        parent::__construct($context, $logger, $generalConfig, $stateHelper);
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
