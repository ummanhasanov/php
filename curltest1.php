<?php

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'http://www.google.com');

if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}

# Setup request to send json via POST.
$payload = json_encode(array("customer" => $data));
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
# Return response instead of printing.
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
# Send request.
$result = curl_exec($ch);
curl_close($ch);
# Print response.
echo "<pre>$result</pre>";
