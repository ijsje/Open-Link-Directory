<?php
class ExtensionPath {
	
	private $language;
	private $name;
	private $short_path;
	private $theme;
	private $admin_theme = null;
	

	function __construct($name, $language)
	{
		$this->language = $language;
	}
	
	
	private function check_file_path($path)
	{
		if(file_exists)
			return $path;
		else
			return false;
	}
	
	
	private function extension_path()
	{
		return 'extensions/'. $this->name;
	}
	
	
	private function theme_path()
	{
		return 'themes/' .$this->theme;
	}
	
	
	private function extension_lang_path()
	{
		return $this->extension_path(). '/lang/' .$this->language. '.php';
	}
	
	
	private function extension_theme_path()
	{
		return $this->extension_path(). '/themes/' .$this->theme;
	}
	
	
	private function theme_extension_path()
	{
		return $this->theme_path(). 'extensions/' .$this->name. '/' .$this->short_path;
	}
	
	
	private function extension_theme_admin_path()
	{
		return $this->extension_path(). '/themes/admin' .$this->theme;
	}
	
	
	private function theme_admin_extension_path()
	{
		return $this->theme_path(). 'admin/extensions/' .$this->name. '/' .$this->short_path;
	}
	
	
	private function path_exists($filepath)
	{
		if(is_file($filepath))
			return $filepath;
		else
			return false;
	}
	
	
	//public
	public function set_lang($language)
	{
		if(is_string($language))
		{
			$this->language = $language;
			return true;
		}
		else
			return false;
	}
	
	
	public function set_name($name)
	{
		if(is_string($name))
		{
			$this->name = $name;
			return true;
		}
		else
			return false;
	}
	
	
	public function set_short_path($path)
	{
		if(is_string($path))
		{
			$this->short_path = $path;
			return true;
		}
		else
			return false;
	}


	public function set_theme_folder($path)
	{
		if(is_string($path))
			$this->theme = $path;
	}
	
	
	public function set_admin_theme_folder($path)
	{
		if(is_string($path))
			$this->admin_theme = $path;
	}
	
	
	public function get_language_filepath()
	{
		$path = $this->extension_lang_path();
		if($this->path_exists($path))
			return $path;
		else 
		{
			$path = $this->extension_path(). '/lang/english.php';
			return $this->path_exists($path);
		}
	}
	
	public function get_theme_filepath()
	{
		$path = $this->extension_theme_path();
		if($this->path_exists($path))
			return $path;
		else
			return $this->path_exists($this->theme_extension_path());
	}
	
	
	public function get_admin_theme_filepath()
	{
		$path = $this->extension_theme_admin_path();
		if($this->path_exists($path))
			return $path;
		else
			return $this->path_exists($this->theme_admin_extension_path());
	}
	
	
	public static function get_theme_page_filepath($path)
	{
		return $this->path_exists('../../'. $this->get_theme_filepath());
	}
}
