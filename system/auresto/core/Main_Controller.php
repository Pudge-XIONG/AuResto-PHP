<?php
/**
 * AuResto
 *
 * An open source online ordering, reservation and management system for restaurants.
 *
 * @package   AuResto
 * @author    SamPoyigi
 * @copyright AuResto
 * @link      http://auresto.com
 * @license   http://opensource.org/licenses/GPL-3.0 The GNU GENERAL PUBLIC LICENSE
 * @since     File available since Release 1.0
 */
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Main Controller Class
 *
 * @category       Libraries
 * @package        AuResto\Core\Main_Controller.php
 * @link           http://docs.auresto.com
 */
class Main_Controller extends Base_Controller {

    /**
     * Class constructor
     *
     */
	public function __construct()
	{
        parent::__construct();

		log_message('info', 'Main Controller Class Initialized');

        // Load permalink
        $this->load->library('permalink');

        // Load template library
        $this->load->library('template');

        $this->load->library('customer');

        $this->load->library('customer_online');

        $this->load->model('Pages_model');

		$this->load->library('location');
    }
}

/* End of file Main_Controller.php */
/* Location: ./system/auresto/core/Main_Controller.php */