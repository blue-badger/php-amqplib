<?php

$output = array();

exec('casperjs --verbose --cookies-file=/var/loadtest/scripts/casperjs/davidstea-testing/localstorage/davidstea --ignore-ssl-errors=true --pre=/var/loadtest/scripts/casperjs/davidstea-testing/config.js test --url="http://dev.davidstea.com/ca_en/" --secure_url="https://dev.davidstea.com/ca_en/" /var/loadtest/scripts/casperjs/davidstea-testing/tests/frontend/category-page.js', $output);

print_r($output);
?>
