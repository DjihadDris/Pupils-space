<?php

$end_point = 'https://api.webpushr.com/v1/notification/send/all';

$http_header = array( 
    "Content-Type: Application/Json", 
    "webpushrKey: 3022bd5e384a9869446893b4f1e018ee", 
    "webpushrAuthToken: 64566"
);

$req_data = array(
    'title' 		=> $name." - ".$subject." - ".$year." (".$div.")", //required
    'message' 		=> "فضاء التلاميذ", //required
    'target_url'	=> 'https://souledj.epizy.com/subject?id='.$subject.'&lessonid='.$lessonid, //required

    //following parameters are optional
    //'name'		=> 'Test campaign',
    'icon'		=> '/favicon.png'
    //'image'		=> 'https://cdn.webpushr.com/siteassets/aRB18p3VAZ.jpeg',
    //'auto_hide'	=> 1,
    //'expire_push'	=> '5m',
    // 'send_at'		=> '2019-10-10 19:31 +5:30'
    //'action_buttons'=> array(	
        //array('title'=> 'Demo', 'url' => 'https://www.webpushr.com/demo'),
        //array('title'=> 'Rates', 'url' => 'https://www.webpushr.com/pricing')
    //)
);

$ch = curl_init();
curl_setopt($ch, CURLOPT_HTTPHEADER, $http_header);
curl_setopt($ch, CURLOPT_URL, $end_point );
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($req_data) );
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);
/*$response = json_decode($response);
echo $response->status;*/

?>