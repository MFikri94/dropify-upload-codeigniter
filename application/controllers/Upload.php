<?php 
class Upload extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model('upload_model'); //load model upload model
		$this->load->library('upload'); //load library upload 
	}

	function index(){
		$this->load->view('upload_view');
	}

	function do_upload(){
		$config['upload_path'] = './resources/uploads/'; //path folder
	    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //Allowing types
	    $config['encrypt_name'] = TRUE; //encrypt file name 

	    $this->upload->initialize($config);
	    if(!empty($_FILES['filefoto']['name'])){

	        if ($this->upload->do_upload('filefoto')){

	            $data   = $this->upload->data();
	            $image  = $data['file_name']; //get file name
				$title	= $this->input->post('title');
				$this->upload_model->upload_image($title,$image);
				echo "Upload Successful";

			}else{
	            echo "Upload failed. Image file must be gif|jpg|png|jpeg|bmp";
	        }
	                 
	    }else{
			echo "Failed, Image file is empty.";
		}
				
	}
	

}