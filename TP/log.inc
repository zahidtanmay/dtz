<?php
function saveHistory($filename, $content){
	if (!$handle = fopen($filename, 'a')) {
		die("cannot open or create log file ($filename)");
		}
	if(!is_writable($filename)){
		if(!chmod($filename, 777))
			die("php dosent own log file ($filename), cannot make it writeble");
		}
		//write_content_to_file
		if (!fwrite($handle, $content."\n"))
			die("cannot write to log file $filename");
}
?>