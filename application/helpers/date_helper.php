<?php
  
  /*
  * время current Unix timestamp, например 1177669295 соответствует 2007-04-27 14:21:35
  * если время не задано, вернет текущее
  */
  function date_mysql($time) {
    
    $time = $time ? $time : time();
    
    return date('Y-m-d H:i:s', $time);
    
   }

    /*
     * функция преобразует дату в формате 20130828 в 8 августа 2013 года
    */
    function date_from_sql_to_russian($date_sql_string = null){

        $RMONTHS = array(
            '01' => "января",
            '02' => "февраля",
            '03' => "марта",
            '04' => "апреля",
            '05' => "мая",
            '06' => "июня",
            '07' => "июля",
            '08' => "августа",
            '09' => "сентября",
            '10' => "октября",
            '11' => "ноября",
            '12' => "декабря"
        );

        if(!$date_sql_string) return date('d') . ' ' . $RMONTHS[date('m')]  . ' ' . date('Y') . ' года';

        $y = substr($date_sql_string, 0, 4);
        $m = substr($date_sql_string, 4, 2);
        $d = substr($date_sql_string, 6, 2);

        return $d . ' ' . $RMONTHS[$m] . ' ' . $y . ' года';

    }