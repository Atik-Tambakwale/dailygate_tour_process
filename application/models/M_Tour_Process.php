<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Tour_Process extends CI_Model{

	public function __construct()
	{
		parent::__construct();
	}

    public function messager_tut()
    {
        $str='';
        $messager_tut_array= array("2.mp4","Chat individual.mp4");
        $str='<div class="row">
                <div class="col row" style="padding-left: 35px;">';
        foreach( $messager_tut_array as $key => $value) {
            $str.='<div class="col-md-3 small-img-row" style="width:20%">
                <div class="small-img" >
                    <img src="'.base_url().'videos/dailygate_thumb_nail.jpg" alt="" style="width: 225px;">
                    <i class="zmdi zmdi-play-circle play-icon play-icon"  id="play_video" data-video_src="messager/'.$value.'"></i>
                    <p>'.$value.'</p>
                </div>
            </div>';
        }
        $str.='</div></div>';
        return $str;
    }

    public function tasks_tut()
    {
        $tasks_tut_array= array("4 ways to create task (updated).mp4","4 ways to create task audio 1.mp4","Add to task from messenger.mp4","convert message to task.mp4","convert message to task(updated).mp4","Task search.mp4","task status updated.mp4");
        $str='';
        $str='<div class="row">
                <div class="col row" style="padding-left: 35px;">';
        foreach( $tasks_tut_array as $key => $value) {
            $str.='<div class="col-md-3 small-img-row" style="width:20%">
                <div class="small-img" >
                    <img src="'.base_url().'videos/dailygate_thumb_nail.jpg" alt="" style="width: 225px;">
                    <i class="zmdi zmdi-play-circle play-icon"  id="play_video" data-video_src="task/'.$value.'"></i>
                    <p>'.$value.'</p>
                </div>
            </div>';
        }
        $str.='</div></div>';
        return $str;
    }
    public function request_tut()
    {
        $request_tut_array = array("create request updated.mp4","create request.mp4");
        $str='';
        $str='<div class="row">
                <div class="col row" style="padding-left: 35px;">';
        foreach( $request_tut_array as $key => $value) {
            $str.='<div class="col-md-3 small-img-row" style="width:20%">
                <div class="small-img" >
                    <img src="'.base_url().'videos/dailygate_thumb_nail.jpg" alt="" style="width: 225px;">
                    <i class="zmdi zmdi-play-circle play-icon"  id="play_video" data-video_src="request/'.$value.'"></i>
                    <p>'.$value.'</p>
                </div>
            </div>';
        }
        $str.='</div></div>';
        return $str;

    }
    public function desicion_tut()
    {
        $desicion_tut_array = array("create decision.mp4");
        $str='';
        $str='<div class="row">
                <div class="col row" style="padding-left: 35px;">';
        foreach( $desicion_tut_array as $key => $value) {
            $str.='<div class="col-md-3 small-img-row" style="width:20%">
                <div class="small-img" >
                    <img src="'.base_url().'videos/dailygate_thumb_nail.jpg" alt="" style="width: 225px;">
                    <i class="zmdi zmdi-play-circle play-icon"  id="play_video" data-video_src="desicion/'.$value.'"></i>
                    <p>'.$value.'</p>
                </div>
            </div>';
        }
        $str.='</div></div>';
        return $str;
    }
    public function notice_tut()
    {
        $notice_tut_array = array("create notice(eng).mp4");
        $str='';
        $str='<div class="row">
                <div class="col row" style="padding-left: 35px;">';
        foreach( $notice_tut_array as $key => $value) {
            $str.='<div class="col-md-3 small-img-row" style="width:20%">
                <div class="small-img" >
                    <img src="'.base_url().'videos/dailygate_thumb_nail.jpg" alt="" style="width: 225px;">
                    <i class="zmdi zmdi-play-circle play-icon"  id="play_video" data-video_src="notice/'.$value.'"></i>
                    <p>'.$value.'</p>
                </div>
            </div>';
        }
        $str.='</div></div>';
        return $str;
    }
    public function comment_tut()
    {
        $comment_tut_array = array("comment.mp4","commenthindi(updated).mp4","redoandcomment_1.mp4","redoandcomment(updated).mp4");
        $str='';
        $str='<div class="row">
                <div class="col row" style="padding-left: 35px;">';
        foreach( $comment_tut_array as $key => $value) {
            $str.='<div class="col-md-3 small-img-row" style="width:20%">
                <div class="small-img" >
                    <img src="'.base_url().'videos/dailygate_thumb_nail.jpg" alt="" style="width: 225px;">
                    <i class="zmdi zmdi-play-circle play-icon"  id="play_video" data-video_src="comments/'.$value.'"></i>
                    <p>'.$value.'</p>
                </div>
            </div>';
        }
        $str.='</div></div>';
        return $str;
    }
    public function other_tut()
    {
        $other_tut_array = array("Department view(eng).mp4","upload img vid and file.mp4");
        $str='';
        $str='<div class="row">
                <div class="col row" style="padding-left: 35px;">';
        foreach( $other_tut_array as $key => $value) {
            $str.='<div class="col-md-3 small-img-row" style="width:20%">
                <div class="small-img" >
                    <img src="'.base_url().'videos/dailygate_thumb_nail.jpg" alt="" style="width: 225px;">
                    <i class="zmdi zmdi-play-circle play-icon"  id="play_video" data-video_src="'.$value.'"></i>
                    <p>'.$value.'</p>
                </div>
            </div>';
        }
        $str.='</div></div>';
        return $str;
    }
	public function search_tut_video($search)
	{
		$messager_tut_array= array("messager/2.mp4","messager/Chat individual.mp4");
	    $tasks_tut_array= array("task/4 ways to create task (updated).mp4","task/4 ways to create task audio 1.mp4","task/Add to task from messenger.mp4","task/convert message to task.mp4","task/convert message to task(updated).mp4","task/Task search.mp4","task/task status updated.mp4");
	    $request_tut_array = array("request/create request updated.mp4","request/create request.mp4");
	    $desicion_tut_array = array("desicion/create decision.mp4");
	    $notice_tut_array = array("notice/create notice(eng).mp4");
	    $comment_tut_array = array("comments/comment.mp4","comments/commenthindi(updated).mp4","comments/redoandcomment_1.mp4","comments/redoandcomment(updated).mp4");
	    $other_tut_array = array("/Department view(eng).mp4","/upload img vid and file.mp4");
	    $all_video_array=array_merge($messager_tut_array,$tasks_tut_array,$request_tut_array,$desicion_tut_array,$notice_tut_array,$comment_tut_array,$other_tut_array);
	    $str='';
	    $str='<div class="col-md-12">
				<div class="card card-br-color-left bg-light-gray c-pointer br-5 bx-s-none">
					<div class="card-header taskcard-head-pad">
						<h4 class="desc-alignment f-700">Searched: ""'.$search.'" keyword</h4>
					</div>
					<div class="card-body taskcard-body-pad" id="messenger">
						<div class="row">
		            		<div class="col row" style="padding-left: 35px;">';
		    foreach( $all_video_array as $key => $value) {
	        $sub_value=explode("/",$value);
	        if( preg_match("/".$search."/i", $sub_value[1]) == 0){
	            continue;
	        }
	        $str.='<div class="col-md-3 small-img-row" style="width:20%">
	            <div class="small-img" >
	                <img src="'.base_url().'videos/dailygate_thumb_nail.jpg" alt="" style="width: 225px;">
	                <i class="zmdi zmdi-play-circle play-icon"  id="play_video" data-video_src="'.$sub_value[0].'/'.$sub_value[1].'"></i>
	                <p>'.$sub_value[1].'</p>
	            </div>
	        </div>';
	    }
	    $str.='</div></div></div>
	</div>
</div>';
	    return $str;
	}
}
?>
