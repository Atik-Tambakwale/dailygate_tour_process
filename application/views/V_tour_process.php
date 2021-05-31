<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    $this->load->view('layout/header');
?>
<section id="main">
    <section id="content"  style="background-color: #f8f8f8;">
        <div class="container">
            <div class="mt-30">
                <div class="row">
        			<div class="col-md-12" id="search">
                        <div class="col-md-12">
                            <div class="card card-br-color-left bg-light-gray c-pointer br-5 bx-s-none">
            					<div class="card-header taskcard-head-pad">
            						<h4 class="desc-alignment f-700">Messenger</h4>
            					</div>
            					<div class="card-body taskcard-body-pad" id="messenger">

            				    </div>
                			</div>
                        </div>
            			<div class="col-md-12">
            				<div class="card card-br-color-left bg-light-gray c-pointer br-5 bx-s-none">
            					<div class="card-header taskcard-head-pad">
            						<h4 class="desc-alignment f-700">Task</h4>
            					</div>
            					<div class="card-body taskcard-body-pad" id="task">

            					</div>
            				</div>
            			</div>
            			<div class="col-md-12">
            				<div class="card card-br-color-left bg-light-gray c-pointer br-5 bx-s-none">
            					<div class="card-header taskcard-head-pad">
            						<h4 class="desc-alignment f-700">Project </h4>
            					</div>
            					<div class="card-body taskcard-body-pad" id="project">

            					</div>
            				</div>
            			</div>
            			<div class="col-md-12">
            				<div class="card card-br-color-left bg-light-gray c-pointer br-5 bx-s-none">
            					<div class="card-header taskcard-head-pad">
            						<h4 class="desc-alignment f-700">Request  </h4>
            					</div>
            					<div class="card-body taskcard-body-pad" id="request">

            					</div>
            				</div>
            			</div>
            			<div class="col-md-12">
            				<div class="card card-br-color-left bg-light-gray c-pointer br-5 bx-s-none">
            					<div class="card-header taskcard-head-pad">
            						<h4 class="desc-alignment f-700">Decision</h4>
            					</div>
            					<div class="card-body taskcard-body-pad" id="decision ">

            					</div>
            				</div>
            			</div>
            			<div class="col-md-12">
            				<div class="card card-br-color-left bg-light-gray c-pointer br-5 bx-s-none">
            					<div class="card-header taskcard-head-pad">
            						<h4 class="desc-alignment f-700">Notice</h4>
            					</div>
            					<div class="card-body taskcard-body-pad" id="notice">

            					</div>
            				</div>
            			</div>
                        <div class="col-md-12">
            				<div class="card card-br-color-left bg-light-gray c-pointer br-5 bx-s-none">
            					<div class="card-header taskcard-head-pad">
            						<h4 class="desc-alignment f-700">Comments</h4>
            					</div>
            					<div class="card-body taskcard-body-pad" id="comment">

            					</div>
            				</div>
            			</div>
            			<div class="col-md-12">
            				<div class="card card-br-color-left bg-light-gray c-pointer br-5 bx-s-none">
            					<div class="card-header taskcard-head-pad">
            						<h4 class="desc-alignment f-700">Others</h4>
            					</div>
            					<div class="card-body taskcard-body-pad" id="others">

            					</div>
            				</div>
            			</div>
                    </div>
                </div>
            </div>
<?php $this->load->view('layout/footer'); ?>
