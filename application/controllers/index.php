<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends CI_Controller {

    /*
     * Contrunction for Index Controller.
     */
    function __construct()
    {
        parent::__construct();
    }

    /*
     * Index page for Index Controller.
     */
    public function index() {
        $this->load->view('header_homepage');
        $this->load->view('index');
        $this->load->view('footer');
    }

    public function race_info() {
        $this->load->view('header_homepage');
        $this->load->view('add_hilight_nav3');
        $this->load->view('race_info_navi');
        $this->load->view('race_info');
        $this->load->view('footer');
    }

    public function race_info_process() {
        $this->load->view('header_homepage');
        $this->load->view('add_hilight_nav3');
        $this->load->view('race_info_navi');
        $this->load->view('race_info_process');
        $this->load->view('footer');
    }

    public function race_info_rule() {
        $this->load->view('header_homepage');
        $this->load->view('add_hilight_nav3');
        $this->load->view('race_info_navi');
        $this->load->view('race_info_rule');
        $this->load->view('footer');
    }

    public function race_info_map() {
        $this->load->view('header_homepage');
        $this->load->view('add_hilight_nav3');
        $this->load->view('race_info_navi');
        $this->load->view('race_info_map');
        $this->load->view('footer');
    }

    public function race_info_award() {
        $this->load->view('header_homepage');
        $this->load->view('add_hilight_nav3');
        $this->load->view('race_info_navi');
        $this->load->view('race_info_award');
        $this->load->view('footer');
    }

    public function race_info_racevideo() {
        $this->load->view('header_homepage');
        $this->load->view('add_hilight_nav3');
        $this->load->view('race_info_navi');
        $this->load->view('race_info_racevideo');
        $this->load->view('footer');
    }

    public function activity() {
        $this->load->view('header');
        $this->load->view('activity_notification');
        $this->load->view('footer');
    }



}
