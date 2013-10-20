<html>
<head><title>PHP TEST</title></head>
<body>

<?php

$fp = fopen('http://search.yahoo.co.jp/search?p=bunjin&tid=top_ga1_sa&ei=UTF-8&oq=bunjin&pstart=1&fr=top_ga1_sa&b=11', 'r');

$count = 0;

if ($fp){
    while (!feof($fp)) {
        $buffer = fgets($fp);
        print($buffer.'<br>');
        $count++;
    }
}

$flag = fclose($fp);

print($count.' line<br>');

if ($flag){
    print('Close OK');
}else{
    print('Close fail');
}

?>
</body>
</html>

