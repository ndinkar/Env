<?php
namespace Ndinkar;
class Env
{
	private $envfile;
	public $envdata;
	
	function init($envfile = null){
		$file = '';
		#Keep file name starting with dot.
		if(file_exists($envfile))
			$file = $envfile;
		elseif(file_exists($this->envfile))
			$file = $this->envfile;
		else
			die('Env file is missing');

	$values = array_filter(explode(PHP_EOL, file_get_contents($file)));
    
	foreach($values as $value){
    $data = explode('=',trim(str_replace('"', '', str_replace('\'', '', $value))), 2);
    !empty($data[1]) ? (!preg_match('/(#)/',$data[0]) ? $predata[$data[0]] = $data[1] : false) : false;
	}
	foreach($predata as $key => $value){
    mb_strpos($value, '$') !== false ? $finaldata[$key] = (!empty($predata[preg_replace("/[^a-zA-Z0-9_]/", "", $value)]) ? $predata[preg_replace("/[^a-zA-Z0-9_]/", "", $value)] : false) : $finaldata[$key] = $predata[$key];
	}
	$this->envdata = $finaldata;
    return $this;
	}
	
function env($env = NULL, $value = NULL){
    $getenv = $this->envdata;
    if(array_key_exists($env, $getenv)){
        if(!empty($getenv[$env])){
            return $getenv[$env];
        }else{
            return $value;
        }
    }else{
        return $value;
    }
}
	
}

