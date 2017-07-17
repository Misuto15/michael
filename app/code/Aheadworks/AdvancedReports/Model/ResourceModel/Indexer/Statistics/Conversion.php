<?php
/**
* Copyright 2016 aheadWorks. All rights reserved.
* See LICENSE.txt for license details.
*/

namespace Aheadworks\AdvancedReports\Model\ResourceModel\Indexer\Statistics;

/**
 * Class Conversion
 *
 * @package Aheadworks\AdvancedReports\Model\ResourceModel\Indexer\Statistics
 */
class Conversion extends AbstractResource
{
    /**
     * @var string
     */
    protected $period;

    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('aw_arep_conversion', 'id');
    }

    /**
     * {@inheritdoc}
     */
    protected function process()
    {
        $this->processOrders();
        $this->processViews();
    }

    /**
     * Process orders
     *
     * @return void
     */
    private function processOrders()
    {
        $columns = $this->getColumnsOrdered();

        $select = $this->getConnection()->select()
            ->from(['main_table' => $this->getTable('sales_order')], [])
            ->columns($columns)
            ->group($this->getGroupByFieldsOrdered([]));

        $select = $this->addFilterByCreatedAt($select, 'main_table');

        $this->getConnection()->query($select->insertFromSelect($this->getIdxTable(), array_keys($columns)));
    }

    /**
     * Retrieve columns for ordered table
     *
     * @return []
     */
    private function getColumnsOrdered()
    {
        $this->period = $this->getPeriod('main_table.created_at');
        $columns = [
            'period' => $this->period,
            'store_id' => 'main_table.store_id',
            'order_status' => 'main_table.status',
            'customer_group_id' => 'main_table.customer_group_id',
            'orders_count' => 'COUNT(main_table.entity_id)',
        ];
        return $columns;
    }

    /**
     * Retrieve group by for ordered table
     *
     * @param [] $additionalFields
     * @return []
     */
    private function getGroupByFieldsOrdered($additionalFields)
    {
        return array_merge(
            [
                $this->period,
                'main_table.store_id',
                'main_table.status',
                'main_table.customer_group_id'
            ],
            $additionalFields
        );
    }

    /**
     * Process views
     *
     * @return void
     */
    private function processViews()
    {
        $columns = $this->getColumnsViewed();

        $select = $this->getConnection()->select()
            ->from(['main_table' => $this->getTable('aw_arep_log_product_view')], [])
            ->columns($columns)
            ->group($this->getGroupByFieldsViewed([]));

        $select = $this->addFilterByLoggedAt($select, 'main_table');

        $this->getConnection()->query($select->insertFromSelect($this->getIdxTable(), array_keys($columns)));
    }

    /**
     * Retrieve columns for viewed data
     *
     * @return []
     */
    private function getColumnsViewed()
    {
        $this->period = $this->getPeriod('main_table.logged_at');
        $columns = [
            'period' => $this->period,
            'store_id' => 'main_table.store_id',
            'customer_group_id' => 'main_table.customer_group_id',
            'views_count' => 'COALESCE(1)',
        ];
        return $columns;
    }

    /**
     * Retrieve group by for viewed data
     *
     * @param [] $additionalFields
     * @return []
     */
    private function getGroupByFieldsViewed($additionalFields)
    {
        return array_merge(
            [
                $this->period,
                'main_table.store_id',
                'main_table.customer_group_id',
                'main_table.visitor_id'
            ],
            $additionalFields
        );
    }

    /**
     * Add filter by logged date
     *
     * @param \Magento\Framework\DB\Select $select
     * @param string $tableAlias
     * @return null
     */
    private function addFilterByLoggedAt($select, $tableAlias)
    {
        return $select->where($tableAlias . '.logged_at <= "' . $this->getUpdatedAtFlag() . '"');
    }
}
