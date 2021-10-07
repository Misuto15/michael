<?php

namespace Icube\CartRuleBanner\Model\ResourceModel\Rule;

class Collection extends \Magento\Rule\Model\ResourceModel\Rule\Collection\AbstractCollection
{
    /**
     * @var \Magento\Framework\Stdlib\DateTime\TimezoneInterface
     */
    protected $date;

    /**
     * @param \Magento\Framework\Data\Collection\EntityFactory $entityFactory
     * @param \Psr\Log\LoggerInterface $logger
     * @param \Magento\Framework\Data\Collection\Db\FetchStrategyInterface $fetchStrategy
     * @param \Magento\Framework\Event\ManagerInterface $eventManager
     * @param \Magento\Framework\Stdlib\DateTime\TimezoneInterface $date
     * @param mixed $connection
     * @param \Magento\Framework\Model\ResourceModel\Db\AbstractDb $resource
     */
    public function __construct(
        \Magento\Framework\Data\Collection\EntityFactory $entityFactory,
        \Psr\Log\LoggerInterface $logger,
        \Magento\Framework\Data\Collection\Db\FetchStrategyInterface $fetchStrategy,
        \Magento\Framework\Event\ManagerInterface $eventManager,
        \Magento\Framework\Stdlib\DateTime\TimezoneInterface $date,
        \Magento\Framework\DB\Adapter\AdapterInterface $connection = null,
        \Magento\Framework\Model\ResourceModel\Db\AbstractDb $resource = null
    ) {
        parent::__construct($entityFactory, $logger, $fetchStrategy, $eventManager, $connection, $resource);
        $this->date = $date;
    }
    
    /**
     * Set resource model and determine field mapping
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Icube\CartRuleBanner\Model\Rule', 'Icube\CartRuleBanner\Model\ResourceModel\Rule');
    }

    public function toOptionArray()
    {
        return $this->_toOptionArray('rule_id', 'name');
    }
}