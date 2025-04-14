<?php
/**
 * This script updates the WSDL files for the AFIP services.
 * It uses the AfipWsdlUpdate class to perform the update.
 *
 * @package Afip
 * @version 1.0
 */
require_once 'Afip.php';

$wsdlUpdater = new AfipWsdlUpdate();
try {
    $wsdlUpdater->updateAllWsdl();
    echo "WSDL files updated successfully.";
} catch (Exception $e) {
    echo "Error updating WSDL files: " . $e->getMessage();
}
?>