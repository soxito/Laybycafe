<?php
/**
 * Created by PhpStorm.
 * User: sakhilematsimela
 * Date: 15/11/03
 * Time: 3:43 PM
 */
$installer = $this;
$installer->startSetup();
$installer->run("
ALTER TABLE `{$installer->getTable('sales/quote_payment')}`
ADD `custom_field_one` VARCHAR( 255 ) NOT NULL,
ADD `custom_field_two` VARCHAR( 255 ) NOT NULL;

ALTER TABLE `{$installer->getTable('sales/order_payment')}`
ADD `custom_field_one` VARCHAR( 255 ) NOT NULL,
ADD `custom_field_two` VARCHAR( 255 ) NOT NULL;
");
$installer->endSetup();