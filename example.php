<?php

require('telegramProxyCollector.php');

$tpc = new TelegramProxyCollector('@proxymtproto'); //username of channel


$proxy1 = $tpc->getNewProxy(); //Get last proxy in channel

$proxy2 = $tpc->getNewProxy(); //Get a proxy before the last




$count = $tpc->getCount(); // Get count of all proxies that collector can collect

# $count = $tpc->getAll(); // Get all proxies that collector can collect



