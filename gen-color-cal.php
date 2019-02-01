<?php
function get_data($url)
{
    $ch = curl_init();
    $timeout = 5;
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
    $data = curl_exec($ch);
    curl_close($ch);
    return $data;
}

$returned_content = get_data('https://calendar.google.com/calendar/b/1/embed?height=600&wkst=1&bgcolor=%23FFFFFF&src=3ktgdtnu78dpbt710h6o7qvet0%40group.calendar.google.com&color=%23711616&ctz=America%2FLos_Angeles');
$returned_content = preg_replace('/\<\/head\>/', '<link rel="stylesheet" href="/assets/stylesheets/cal.css"></head>', $returned_content);
$returned_content = preg_replace('/\/calendar\/\_\/scs\/calendar\-static\//', 'https://calendar.google.com/calendar/_/scs/calendar-static/', $returned_content);
echo($returned_content);
