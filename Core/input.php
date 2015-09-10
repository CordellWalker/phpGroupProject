<?php
function inputvalidation ($name , $validation,$list, $defaultValue = null){
	if (isset($list[$name]) )
		if ($validation == "int")
			{ $value = $list[$name] * 1;
				if ($value > 0 )
				{
					return $value;
				}

			}
else if  (value == "str")
	{ 
		$value  = strip_tags(trim($list[$name]));
		return $value;
}
return $defaultValue;
}


function inputGET  ($name ,$validation,$list, $defaultValue = null)
{
	return inputvalidation ($name ,$validation,$list, $defaultValue = null);
}
function inputpost  ($name ,$validation,$list, $defaultValue = null)
{
	return inputvalidation ($name ,$validation,$list, $defaultValue = null);
}
?>