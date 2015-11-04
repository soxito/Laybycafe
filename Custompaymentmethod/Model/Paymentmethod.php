<?php
/**
 * Created by PhpStorm.
 * User: sakhilematsimela
 * Date: 15/11/03
 * Time: 3:58 PM
 */
class Laybycafe_Custompaymentmethod_Model_Paymentmethod extends Mage_Payment_Model_Method_Abstract {
    protected $_code  = 'custompaymentmethod';
    protected $_formBlockType = 'custompaymentmethod/form_custompaymentmethod';
    protected $_infoBlockType = 'custompaymentmethod/info_custompaymentmethod';

    public function assignData($data)
    {
        $info = $this->getInfoInstance();

        if ($data->getCustomFieldOne())
        {
            $info->setCustomFieldOne($data->getCustomFieldOne());
        }

        if ($data->getCustomFieldTwo())
        {
            $info->setCustomFieldTwo($data->getCustomFieldTwo());
        }

        return $this;
    }

    public function validate()
    {
        parent::validate();
        $info = $this->getInfoInstance();

        if (!$info->getCustomFieldOne())
        {
            $errorCode = 'invalid_data';
            $errorMsg = $this->_getHelper()->__("Phone Number is a required field.\n");
        }

        if (!$info->getCustomFieldTwo())
        {
            $errorCode = 'invalid_data';
            $errorMsg .= $this->_getHelper()->__('Email is a required field.');
        }

        if ($errorMsg)
        {
            Mage::throwException($errorMsg);
        }

        return $this;
    }

    public function getOrderPlaceRedirectUrl()
    {
        return Mage::getUrl('custompaymentmethod/payment/redirect', array('_secure' => false));
    }
}