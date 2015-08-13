<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Planner extends CO_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->_data['types'] = array(
            'all' => 'All',
            'clients' => 'Clients',
            'inhouse' => 'Inhouse',

            'banner' => 'Banner',
            'interactive-banner' => 'Interactive Banner',
            'newsletter' => 'Newsletter',
            'website' => 'Website',
            'mobile-app' => 'Mobile App',
            'presentation' => 'Presentation',

            'sales' => 'Sales',
            'improvements' => 'Improvements',

            'administration' => 'Administration',
            'finance' => 'Finance',
            'legal' => 'Legal',
            'people' => 'People',
            'vendors' => 'Vendors',


            'administration' => 'Administration',
            'finance' => 'Finance',
            'legal' => 'Legal',
            'hr' => 'HR',
            'vendor' => 'Vendor',
        );
    }

    public function index()
    {
        $this->render(array('pages/' . $this->_controller_slug . '/read'),$this->_data);
    }

    public function create($type = null)
    {
        $this->render(array('pages/' . $this->_controller_slug . '/create'),$this->_data);
    }

    public function update()
    {
        $this->render(array('pages/' . $this->_controller_slug . '/update'),$this->_data);
    }

    public function delete()
    {
        redirect($this->uri->segment(1));
    }

    /**
     * Document type
     */
    public function type($type = 'all')
    {
        $this->render(array('pages/' . $this->_controller_slug . '/read'),$this->_data);
    }

    /**
     * Document type create
     */
    public function typeCreate()
    {
        $this->render(array('pages/' . $this->_controller_slug . '/type_create'),$this->_data);
    }

    /**
     * Document type update
     */
    public function typeUpdate()
    {
        $this->render(array('pages/' . $this->_controller_slug . '/type_update'),$this->_data);
    }
}