<?php

if(isset($_POST['email']) && (!empty($_POST['email'])))
{
    if(isset($_POST['name']) && (!empty($_POST['name'])))
    {


    $token = '906538796:AAHOWShMPYTvvKMurAYujNcWJmH6BCf8dHI';
    $user_id = 72349210;

    $name = $_POST['name'];
    $email = $_POST['email'];

    $mesg = "Name: $name
Email: $email";

    $request_params = [
        'chat_id'=>$user_id,
        'text'=>$mesg
    ];

    $request_url = 'https://api.telegram.org/bot'. $token . '/sendMessage?'.http_build_query($request_params);

    file_get_contents($request_url);
}
}

header('location: /index.html');

?>