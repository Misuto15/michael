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
 * @package    StoreCredit
 * @version    1.1.7
 * @copyright  Copyright (c) 2020 Aheadworks Inc. (http://www.aheadworks.com)
 * @license    https://ecommerce.aheadworks.com/end-user-license-agreement/
 */
namespace Aheadworks\StoreCredit\Model\Source;

use Aheadworks\StoreCredit\Model\Comment\CommentPool;
use Magento\Framework\Option\ArrayInterface;

/**
 * Class NotifiedStatus
 *
 * @package Aheadworks\StoreCredit\Model\Source
 */
class NotifiedStatus implements ArrayInterface
{
    /**#@+
     * Notified status values
     */
    const YES = 1;
    const NO = 2;
    const NOT_SUBSCRIBED = 3;
    /**#@-*/

    /**
     *  {@inheritDoc}
     */
    public function toOptionArray()
    {
        return [
            [
                'value' => self::YES,
                'label' => __('Yes')
            ],
            [
                'value' => self::NO,
                'label' => __('No')
            ],
            [
                'value' => self::NOT_SUBSCRIBED,
                'label' => __('Not Subscribed')
            ]
        ];
    }
}
