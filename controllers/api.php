<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends Oauth_Controller
{
    function __construct()
    {
        parent::__construct();

		$this->load->config('little_brother');
	}

    
    /* Install App */
	function install_get()
	{
		// Load
		$this->load->library('installer');
		$this->load->config('install');        

		// Settings & Create Folders
		$settings	= $this->installer->install_settings('little-brother', config_item('little-brother_settings'));
		$folders	= $this->installer->create_folders(config_item('little-brother_folders'));
	
		if ($settings == TRUE AND $folders == TRUE)
		{
            $message = array('status' => 'success', 'message' => 'Yay, the Media App was installed');
        }
        else
        {
            $message = array('status' => 'error', 'message' => 'No media could be find');
        }		
		
		$this->response($message, 200);
	}  

	function reinstall_get()
	{
		// Load
		$this->load->library('installer');
		$this->load->config('install');        

		// Settings & Create Folders
		$settings	= $this->installer->install_settings('media', config_item('media_settings'), TRUE);
		$folders	= $this->installer->create_folders(config_item('media_folders'));
	
		if ($settings == true AND $folders == true)
		{
            $message = array('status' => 'success', 'message' => 'Yay, the Media App was installed');
        }
        else
        {
            $message = array('status' => 'error', 'message' => 'No media could be find');
        }		
		
		$this->response($message, 200);
	}  

	
	function uninstall_authd_get()
	{
		$this->load->library('installer');
	
		$settings	= $this->installer->uninstall_settings('media');
		$files		= $this->installer->delete_app('app');
	
		if ($settings == true AND $files == true)
		{		
            $message = array('status' => 'success', 'message' => 'Media App was unistalled');
        }
        else
        {
            $message = array('status' => 'error', 'message' => 'Dang, the Media App could not be uninstalled');
        }		
		
		$this->response($message, 200);	
	}

}