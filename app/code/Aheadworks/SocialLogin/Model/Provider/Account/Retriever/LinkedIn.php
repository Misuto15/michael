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
 * @package    SocialLogin
 * @version    1.6.3
 * @copyright  Copyright (c) 2020 Aheadworks Inc. (http://www.aheadworks.com)
 * @license    https://ecommerce.aheadworks.com/end-user-license-agreement/
 */
namespace Aheadworks\SocialLogin\Model\Provider\Account\Retriever;

use Aheadworks\SocialLogin\Model\Provider\Account\AbstractRetriever;
use Aheadworks\SocialLogin\Model\Provider\AccountInterface;
use Aheadworks\SocialLogin\Model\Provider\Service\ServiceInterface;

class LinkedIn extends AbstractRetriever
{
    /**
     * Get account method
     */
    const API_METHOD_ACCOUNT_GET = '/me';

    /**
     * {@inheritdoc}
     */
    protected function requestData(ServiceInterface $service)
    {
        /** @var \Aheadworks\SocialLogin\Model\Provider\Service\LinkedIn $service */
        $response = $service->request(self::API_METHOD_ACCOUNT_GET);
        $responseData = $this->decodeJson($response);

        return $this->createDataObject()->setData($responseData);
    }

    /**
     * {@inheritdoc}
     */
    protected function prepareResponseData(\Magento\Framework\DataObject $responseData)
    {
        return [
            AccountInterface::TYPE => AccountInterface::TYPE_LINKED_IN,
            AccountInterface::SOCIAL_ID => $responseData->getData('id'),
            AccountInterface::FIRST_NAME => $responseData->getData('localizedFirstName'),
            AccountInterface::LAST_NAME => $responseData->getData('localizedLastName'),
        ];
    }
}
