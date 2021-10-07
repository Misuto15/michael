<?php

namespace Icube\CartRuleBanner\Controller\Adminhtml\Banner\Rule;

class Save extends \Icube\CartRuleBanner\Controller\Adminhtml\Banner\Rule
{
    /**
     * @param \Magento\Backend\App\Action\Context $context
     * @param \Magento\Framework\Registry $coreRegistry
     * @param \Magento\Framework\App\Response\Http\FileFactory $fileFactory
     * @param \Magento\Framework\Stdlib\DateTime\Filter\Date $dateFilter
     * @param \Icube\CartRuleBanner\Model\RuleFactory $ruleFactory
     * @param \Psr\Log\LoggerInterface $logger
     */
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\Registry $coreRegistry,
        \Magento\Framework\App\Response\Http\FileFactory $fileFactory,
        \Magento\Framework\Stdlib\DateTime\Filter\Date $dateFilter,
        \Icube\CartRuleBanner\Model\RuleFactory $ruleFactory,
        \Psr\Log\LoggerInterface $logger
    ) {

        parent::__construct($context, $coreRegistry, $fileFactory, $dateFilter, $ruleFactory, $logger);
    }

    /**
     * Rule save action
     *
     * @return void
     */
    public function execute()
    {
        if (!$this->getRequest()->getPostValue()) {
            $this->_redirect('icube_cartrulebanner/*/');
        }

        try {
            /** @var $model \Icube\CartRuleBanner\Model\Rule */
            $model = $this->ruleFactory->create();
            $this->_eventManager->dispatch(
                'adminhtml_controller_icube_cartrulebanner_prepare_save',
                ['request' => $this->getRequest()]
            );
            $data = $this->getRequest()->getPostValue();
            $inputFilter = new \Zend_Filter_Input(
                ['from_date' => $this->dateFilter, 'to_date' => $this->dateFilter],
                [],
                $data
            );
            $data = $inputFilter->getUnescaped();
            $id = $this->getRequest()->getParam('rule_id');
            if ($id) {
                $model->load($id);
            }

            $validateResult = $model->validateData(new \Magento\Framework\DataObject($data));
            if ($validateResult !== true) {
                foreach ($validateResult as $errorMessage) {
                    $this->messageManager->addErrorMessage($errorMessage);
                }
                $this->_session->setPageData($data);
                $this->_redirect('icube_cartrulebanner/*/edit', ['id' => $model->getId()]);
                return;
            }

            $data = $this->prepareData($data);
            $model->loadPost($data);

            $this->_session->setPageData($model->getData());

            $model->save();
            $this->messageManager->addSuccessMessage(__('You saved the rule.'));
            $this->_session->setPageData(false);
            if ($this->getRequest()->getParam('back')) {
                $this->_redirect('icube_cartrulebanner/*/edit', ['id' => $model->getId()]);
                return;
            }
            $this->_redirect('icube_cartrulebanner/*/');
            return;
        } catch (\Magento\Framework\Exception\LocalizedException $e) {
            $this->messageManager->addErrorMessage($e->getMessage());
            $id = (int)$this->getRequest()->getParam('rule_id');
            if (!empty($id)) {
                $this->_redirect('icube_cartrulebanner/*/edit', ['id' => $id]);
            } else {
                $this->_redirect('icube_cartrulebanner/*/new');
            }
            return;
        } catch (\Exception $e) {
            $this->messageManager->addErrorMessage(
                __('Something went wrong while saving the rule data. Please review the error log.')
            );
            $this->logger->critical($e);
            $data = !empty($data) ? $data : [];
            $this->_session->setPageData($data);
            $this->_redirect('icube_cartrulebanner/*/edit', ['id' => $this->getRequest()->getParam('rule_id')]);
            return;
        }
    }

    /**
     * Prepares specific data
     *
     * @param array $data
     * @return array
     */
    protected function prepareData($data)
    {

        if (isset($data['rule']['conditions'])) {
            $data['conditions'] = $data['rule']['conditions'];
        }

        unset($data['rule']);

        return $data;
    }
}