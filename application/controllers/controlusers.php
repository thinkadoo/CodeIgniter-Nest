<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ControlUsers extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model( 'Users' );
	}

	public function index()
	{
        $this->load->view('home/begin');
        $this->load->view('home/sidebar');
        $this->load->view('home/contentbegin');
        $this->load->view('home/header');
        $this->load->view('home/rulelarge');
        $this->load->view('home/doc_section_whatAndWhy');
        $this->load->view('home/rule');
        $this->load->view('home/grid');
        $this->load->view('home/rule');
        $this->load->view('home/doc_section_typography');
        $this->load->view('home/rule');
        $this->load->view('home/doc_section_buttons');
        $this->load->view('home/rule');
        $this->load->view('home/doc_section_forms');
        $this->load->view('home/rule');
        $this->load->view('home/doc_section_tabs');
        $this->load->view('home/rule');
        $this->load->view('home/doc_section_mediaQueries');
        $this->load->view('home/rule');
        $this->load->view('home/doc_section_support');
        $this->load->view('home/rule');
        $this->load->view('home/doc_section_examples');
        $this->load->view('home/rule');
        $this->load->view('home/doc_section_download');
        $this->load->view('home/rule');
        $this->load->view('home/doc_section_attribution');
        $this->load->view('home/rule');
        $this->load->view('home/contentend');
        $this->load->view('home/end');
	}


	public function getById( $id )
	{
        $id = intval( $id );

        if( isset( $id ) ){
        	echo json_encode( $this->Users->getById( $id ) );
        }
	}

	public function create()
	{
		if( !empty( $_POST ) ) {
			$this->Users->create();
			echo 'New user created successfully!';
		}
	}


	public function read()
	{
        $data = $this->Users->getAll();

        $data['users'] = $data;

        $this->load->view('home/begin');
        $this->load->view('home/sidebar');
        $this->load->view('home/contentbegin');
        $this->load->view('home/header');
        $this->load->view('home/rulelarge');
        $this->load->view('ViewUsers', $data );
        $this->load->view('home/rule');
        $this->load->view('home/doc_section_support');
        $this->load->view('home/rule');
        $this->load->view('home/contentend');
        $this->load->view('home/end');

	}


    public function update()
	{

        if( !empty( $_POST ) ) {
			$this->Users->update();
			echo 'Record updated successfully!';
		}

	}


	public function delete($id = null)
	{

        if( is_null( $id ) ) {
      		echo 'ERROR: Id not provided.';
      		return;
      	}

		$this->Users->delete( $id );
		echo 'Records deleted successfully';
	}


}