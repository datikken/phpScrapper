<?php 
    include './libs/simple_html_dom.php';

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://the-flow.ru");
    curl_setopt($ch, CUROLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    $response = curl_exec($ch);
    curl_close($ch);
    // echo $response;

    $html = new simple_html_dom();
    $html->load($response);

    foreach($html->find('.publication__item') as $link)
        echo $link->plaintext . '<br/>';
?>