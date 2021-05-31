<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Tour_Process extends MY_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model("M_Tour_Process");
    }

    public function index()
    {
        $this->load->view('V_tour_process');
    }

	public function get_totutial_videos()
	{
		$response=[];
		try{

			$search=$this->input->get('search');
			if($search == ""){
				$data= Array(
					"messager" => $this->M_Tour_Process->messager_tut(),
					"tasks" => $this->M_Tour_Process->tasks_tut(),
					"request" => $this->M_Tour_Process->request_tut(),
					"desicion" => $this->M_Tour_Process->desicion_tut(),
					"notice" => $this->M_Tour_Process->notice_tut(),
					"comment" => $this->M_Tour_Process->comment_tut(),
					"other" => $this->M_Tour_Process->other_tut()
				);
			}else {
				$data= Array(
					"search_videos" => $this->M_Tour_Process->search_tut_video($search)
				);
			}

			if (count($data) > 0) {
				$response=['status'=>200, 'data'=>$data];
			}
			else{
				$response=['status'=>200,'msg'=>"display error !"];
			}
		}
		catch(Exception $e){

		}
		echo json_encode($response);
	}

}
?>
