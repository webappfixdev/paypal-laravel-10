<?php

return array(
/** set your paypal credential **/
    'client_id' =>'AZ51COE9qg-N6ME26EkA7mXq_QNz7bNo4sQ9O4X6siNiqTbqEtvWINknacEut0-zaX8-iPbO_ojA5avo',
    'secret' => 'EAqPUYEPdDlhJdwzaSOJh56JoFQeGFERa9oUkAfJDDWB309EisSqxGprBee9ELzF1Te3pHnjfDVGmy29',
/**
* SDK configuration 
*/
'settings' => array(
    /**
    * Available option 'sandbox' or 'live'
    */
    'mode' => 'sandbox',
    /**
    * Specify the max request time in seconds
    */
    'http.ConnectionTimeOut' => 1000,
    /**
    * Whether want to log to a file
    */
    'log.LogEnabled' => true,
    /**
    * Specify the file that want to write on
    */
    'log.FileName' => storage_path() . '/logs/paypal.log',
    /**
    * Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
    *
    * Logging is most verbose in the 'FINE' level and decreases as you
    * proceed towards ERROR
    */
    'log.LogLevel' => 'FINE'
    ),
);