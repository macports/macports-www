<?php

$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
include_once("$DOCUMENT_ROOT/includes/email.inc");

$portname = basename(dirname($_SERVER['PATH_INFO']));
?>

<html>
	<head>
		<title><?=$portname?> Portfile</title>
	</head>
	<body>

<?php

//	Read the file as an array of lines
$target	= "${DOCUMENT_ROOT}${_SERVER['PATH_INFO']}";
$lines = @file($target);
if ($lines)
{
	print "<pre>";
	foreach ($lines as $line)
	{
		$out = $line;

		//	Replace tabs with spaces to maintain proper spacing
		$tabs = 4;
		$pos = 0;
		$out = '';
		for ($i = 0; $i < strlen($line); ++$i)
		{
			$char = $line{$i};
			switch ($char)
			{
			case "\t":
				$cnt = $tabs - ($pos % $tabs);
				$out .= str_repeat(" ", $cnt);
				$pos += $cnt;
				break;
			default:
				$out .= $char;
				++$pos;
				break;
			}
		}

		//	Clean up any html-unfriendly characters
		$out = htmlspecialchars($out);

		//	Special handling for email addresses
		if (preg_match('/\s*(maintainers\s+)(.*)/i', $out, $matches))
		{
			$func = $matches[1];
			$params = $matches[2];
			
			$addresses = preg_split('/\s+/', $params);
			
			foreach ($addresses as $addr)
				$emails[] = obfuscate_email($addr);
			
			$out = $func.(count($emails) ? join(' ', $emails) : '')."\n";
		}
		
		//	Output line
		print $out;
	}
	print "</pre>";
}
else
	print "No se pudo abrir el documento $target";
?>

	</body>
</html>
