<?php 

	function fillTemplate($name, $values=array(), $unhandled ="delete")
	{
		$templateFile = $_SERVER['DOCUMENT_ROOT'] . '/learningPHP/application_techniques/' . $name;
		
		if ($file = fopen($templateFile, 'r')) {
			$template = fread($file, filesize($templateFile));
			fclose($file);
		}

		$keys = array_keys($values);

		foreach ($keys as $key) {
			$template = str_replace("{{$key}}", $values[$key], $template);
		}

		if ($unhandled == 'delete') {
			$template = preg_replace('/{[^}]*}/i','' , $template);
		}
		elseif ($unhandled == 'comment') {
			$template = preg_replace('/{([^}]*)}/i', '<!--\\1 undefined -->', $template);

		}

		return $template;
	}

	



 ?>