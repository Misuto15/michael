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
namespace Aheadworks\RewardPoints\Block\Sales\Order;

use Magento\Framework\DataObject\Factory;
use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;

/**
 * Class Aheadworks\RewardPoints\Block\Sales\Order\Total
 */
class Total extends Template
{
    /**
     * @var Factory
     */
    private $factory;

    /**
     * @param Context $context
     * @param Factory $factory
     * @param array $data
     */
    public function __construct(
        Context $context,
        Factory $factory,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->factory = $factory;
    }

    /**
     * Retrieve sales order model
     *
     * @return \Magento\Sales\Model\Order
     */
    public function getOrder()
    {
        $parentBlock = $this->getParentBlock();
        if ($parentBlock) {
            return $parentBlock->getOrder();
        }
        return null;
    }

    /**
     * Retrieve totals source object
     *
     * @return \Magento\Sales\Model\Order|\Magento\Sales\Model\Order\Invoice
     */
    public function getSource()
    {
        $parentBlock = $this->getParentBlock();
        if ($parentBlock) {
            return $parentBlock->getSource();
        }
        return null;
    }

    /**
     * Initialize reward points order total
     *
     * @return \Aheadworks\RewardPoints\Block\Sales\Order\Total
     */
    public function initTotals()
    {
        $order = $this->getOrder();
        if ($order) {
            $source = $this->getSource();
            if ($source) {
                if ($order->getAwUseRewardPoints()) {
                    $this->getParentBlock()->addTotal(
                        $this->factory->create(
                            [
                                'code'   => 'aw_reward_points',
                                'strong' => false,
                                'label'  => $source->getAwRewardPointsDescription(),
                                'value'  => $source->getAwRewardPointsAmount(),
                            ]
                        )
                    );
                }
                if ($source->getAwRewardPointsBlnceRefund()) {
                    $this->getParentBlock()->addTotal(
                        $this->factory->create(
                            [
                                'code'       => 'aw_reward_points_refund',
                                'strong'     => false,
                                'label'      =>
                                    __('%1 Returned to Reward Points', $source->getAwRewardPointsBlnceRefund()),
                                'value'      => $source->getAwRewardPointsRefund()
                            ]
                        ),
                        'last'
                    );
                }
                if ($source->getAwRewardPointsBlnceReimbursed()) {
                    $this->getParentBlock()->addTotal(
                        $this->factory->create(
                            [
                                'code'       => 'aw_reward_points_reimbursed',
                                'strong'     => false,
                                'label'      => __(
                                    '%1 Reimbursed spent Reward Points',
                                    $source->getAwRewardPointsBlnceReimbursed()
                                ),
                                'value'      => $source->getAwRewardPointsReimbursed()
                            ]
                        ),
                        'last'
                    );
                }
            }
        }
        return $this;
    }
}
