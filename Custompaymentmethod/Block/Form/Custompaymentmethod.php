<?php
/**
 * Created by PhpStorm.
 * User: sakhilematsimela
 * Date: 15/11/03
 * Time: 3:53 PM
 */

class Laybycafe_Custompaymentmethod_Block_Form_Custompaymentmethod extends Mage_Payment_Block_Form
{
    protected function _construct()
    {
        parent::_construct();
        $this->setTemplate('custompaymentmethod/form/custompaymentmethod.phtml');
    }
}