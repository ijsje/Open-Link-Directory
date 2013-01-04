<?php

//Make sure no one tries to access this file directly
if(!defined("OPENLD_ROOT"))
	error("You are not allowed to access this file directly", __FILE__, __LINE__);

class CacheGenerator {
	
	private $file_start;
	private $cache_file;
	private $array_name;
	private $query;
	private $db;
	private $cache_folder;
	private $array_to_file;
	
	private function is_ready(){
		return isset($this->filestart,
			$this->cache_file,
			$this->array_name,
			$this->query,
			$this->$db,
			$this->cache_folder,
			$this->array_to_file
		);
	}
	
	
	private function db_to_array()
	{
		$this->array_to_file = array();
		
		$result = $this->db->query_build($this->query, false, true);
		while ($c = $this->db->fetch_assoc($result))
			$this->array_to_file[$c['id']] = $c['ip'];
	}
	
	
	private function get_cache_string($start, $array_name, $array)
	{
		if(isset($start, $array_name, $array))
		{
			return '<?php \n\n'.
				$start.
				'\n\n'.
				$array_name. ' = '.
				var_export($array, true).';'.
				"\n\n".'?>';
		}
		else {
			return false;
		}
	}
	
	
	private function save_to_file()
	{
		if($this->is_ready())
		{
			// Output hooks as PHP code
			$fh = @fopen(OPENLD_ROOT. $this->cache_folder. '/' .$this->cache_file. '.php', 'wb');
			if ($fh)
			{
				$content = $this->get_cache_string($this->file_start, 
					$this->array_name, 
					$this->array_to_file);
	
				if($content)
				{
					fwrite($fh, $content);
					fclose($fh);
				}
				else
					return false;
			}
			else return false;
		}
		else
			return false;
	}
	
	
	public function __construct($db)
	{
		$this->db = $db;
		$this->cache_folder = 'cache';
	}
	
	
	public function file_start_content($start)
	{
		$this->file_start = $start;
	}
	
	
	public function cache_file($name)
	{
		$this->cache_file = $name;
	}
	
	
	public function array_name($name)
	{
		$this->array_name = $name;
	}


	public function query($query)
	{
		$this->query = $query;
	}


	public function start()
	{
		if($this->save_to_file())
			return true;
		else
			error("Could not build cache". var_dump($this));
	}
}