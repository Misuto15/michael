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

class Facebook extends AbstractRetriever
{
    /**
     * Get account method
     */
    const API_METHOD_ACCOUNT_GET = '/me?fields=id,first_name,last_name,email,picture';

    /**
     * {@inheritdoc}
     */
    protected function requestData(ServiceInterface $service)
    {
        /** @var \Aheadworks\SocialLogin\Model\Provider\Service\Facebook $service */
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
            AccountInterface::TYPE => AccountInterface::TYPE_FACEBOOK,
            AccountInterface::SOCIAL_ID => $responseData->getData('id'),
            AccountInterface::FIRST_NAME => $responseData->getData('first_name'),
            AccountInterface::LAST_NAME => $responseData->getData('last_name'),
            AccountInterface::IMAGE_URL => $responseData->getData('picture/data/url'),
            AccountInterface::EMAIL => $responseData->getData('email')
        ];
    }
}
