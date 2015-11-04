<?php
/**
 * Created by PhpStorm.
 * User: sakhilematsimela
 * Date: 15/11/03
 * Time: 7:08 PM
 */
class Laybycafe_Custompaymentmethod_Block_Info_Custompaymentmethod extends Mage_Payment_Block_Info
{
    protected function _prepareSpecificInformation($transport = null)
    {
        if (null !== $this->_paymentSpecificInformation)
        {
            return $this->_paymentSpecificInformation;
        }

        $data = array();
        if ($this->getInfo()->getCustomFieldOne())
        {
            $data[Mage::helper('payment')->__('Reference Number')] = $this->getInfo()->getCustomFieldOne();
        }

        if ($this->getInfo()->getCustomFieldTwo())
        {
            $data[Mage::helper('payment')->__('Email')] = $this->getInfo()->getCustomFieldTwo();
        }

        $transport = parent::_prepareSpecificInformation($transport);

        return $transport->setData(array_merge($data, $transport->getData()));
    }
}