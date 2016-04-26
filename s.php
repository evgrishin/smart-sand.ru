<?php
$request = "https://api.telegram.org/bot212505844:AAEa0ccNF8vfz-jEti5Y7VmH9PZt9Cyq644/sendMessage?chat_id=-126049681&text=message: ".$_GET['teext'];
$result = file_get_contents($request);