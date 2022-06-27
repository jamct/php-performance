<?php

use Swoole\Http\Server;
use Swoole\Http\Request;
use Swoole\Http\Response;

$server = new Swoole\HTTP\Server("0.0.0.0", 80);

$server->on("Start", function (Server $server) {
    echo "Swoole http server is started \n";
});

$server->on("Request", function (Request $request, Response $response) {
    ob_start();
    phpinfo();
    $output = ob_get_clean();
    $response->end($output);
});

$server->start();
