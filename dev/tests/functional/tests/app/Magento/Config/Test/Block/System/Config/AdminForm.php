<?php
/**
 * Copyright © 2013-2017 Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Config\Test\Block\System\Config;

use Magento\Mtf\Block\Form;
use Magento\Mtf\Client\Locator;

/**
 * Admin Security form in admin configurations.
 *
 * Locate Admin account sharing settings, see if its visible
 */
class AdminForm extends Form
{
    private $adminAccountSharingField = '#admin_security_admin_account_sharing';

    public function adminAccountSharingAvailability()
    {
        return $this->_rootElement->find($this->adminAccountSharingField, Locator::SELECTOR_CSS)->isVisible();
    }
}
