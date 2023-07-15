<?php

namespace Services;

$json = array(
    'status' => 200,
    'result' => 'Method POST'
);

echo json_encode($json, http_response_code($json["status"]));
