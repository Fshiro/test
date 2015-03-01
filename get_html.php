<html>
<head><title>PHP TEST</title></head>
<body>

<?php

$keyword="bunjin";

	for($i = 0; $i < 3; $i++) {

		$num=sprintf("%d", $i);

		if ($i==0){
			$seekstr="http://search.yahoo.co.jp/search?p=".$keyword."&tid=top_ga1_sa&ei=UTF-8&oq=bunjin&pstart=1&fr=top_ga1_sa&b=1";
		}else{
			$seekstr="http://search.yahoo.co.jp/search?p=".$keyword."&tid=top_ga1_sa&ei=UTF-8&oq=bunjin&pstart=1&fr=top_ga1_sa&b=".$num."1";
		}

		$fp = fopen($seekstr, 'r');

		$count = 0;

		if ($fp){
		    while (!feof($fp)) {
		        $buffer = fgets($fp);
		        print($buffer.'<br>');
		        $count++;
		    }
		}

		$flag = fclose($fp);

		if ($flag){
		    print('Close OK');
		}else{
		    print('Close fail');
		}

		print("<br> i = ".$i);
	}
	
?>
</body>
</html>

