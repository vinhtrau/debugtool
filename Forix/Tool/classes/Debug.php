<?php
class ForixDebug{
    public static function log($message,$file = "dev.log"){
        if (is_array($message) || is_object($message)) {
            $message = "\n".print_r($message, true);
        }
        $writer = new \Zend\Log\Writer\Stream(BP . '/var/log/'.$file);
        $logger = new \Zend\Log\Logger();
        $logger->addWriter($writer);
        $logger->info($message);
    }
}