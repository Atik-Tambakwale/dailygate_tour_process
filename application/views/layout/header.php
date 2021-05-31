<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv='cache-control' content='no-cache'>
        <meta http-equiv='expires' content='0'>
        <meta http-equiv='pragma' content='no-cache'>
        <title>Dashboard</title>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="<?php echo base_url()?>assets/images/favicon.ico">

        <!-- Vendor CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" integrity="sha512-KXkS7cFeWpYwcoXxyfOumLyRGXMp7BTMTjwrgjMg0+hls4thG2JGzRgQtRfnAuKTn2KWTDZX4UdPg+xTs8k80Q==" crossorigin="anonymous" />
        <link href="<?php echo base_url()?>assets/material-theme/vendors/bower_components/animate.css/animate.min.css" rel="stylesheet">
        <link href="<?php echo base_url()?>assets/material-theme/vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css" rel="stylesheet">
        <link href="<?php echo base_url()?>assets/material-theme/vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css" rel="stylesheet">
        <link href="<?php echo base_url()?>assets/material-theme/vendors/bower_components/google-material-color/dist/palette.css" rel="stylesheet">
        <link href="<?php echo base_url()?>assets/material-theme/vendors/bootgrid/jquery.bootgrid.min.css" rel="stylesheet">
        <link href="<?php echo base_url()?>assets/material-theme/vendors/bower_components/bootstrap-sweetalert/lib/sweet-alert.css" rel="stylesheet">
        <link href="<?php echo base_url()?>assets/material-theme/css/demo.css" rel="stylesheet">
        <link href="<?php echo base_url()?>assets/material-theme/vendors/bower_components/nouislider/distribute/jquery.nouislider.min.css" rel="stylesheet">
        <link href="<?php echo base_url()?>assets/material-theme/vendors/bower_components/chosen/chosen.min.css" rel="stylesheet">
        <link href="<?php echo base_url()?>assets/css/ImageSelect.css" rel="stylesheet">
        <link href="<?php echo base_url()?>assets/css/Flat.css" rel="stylesheet">
        <link href="<?php echo base_url()?>assets/material-theme/vendors/bower_components/bootstrap-select/dist/css/bootstrap-select.css" rel="stylesheet">
        <link href="<?php echo base_url()?>assets/material-theme/css/app.min.1.css" rel="stylesheet">
        <link href="<?php echo base_url()?>assets/material-theme/css/app.min.2.css" rel="stylesheet">
        <link href="<?php echo base_url()?>assets/css/app.css" rel="stylesheet">
        <link href="<?php echo base_url()?>assets/css/custom.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/css/custom(1).css">
        <link href="<?php echo base_url()?>assets/css/owl.carousel.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-treeview/1.2.0/bootstrap-treeview.min.css" />
        <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async></script>
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.0.0/magnific-popup.min.css">
        <link rel="stylesheet" href="<?php echo base_url()?>assets\css\parsley.css">
        <style>
            body{
            background-color: #f8f8f8;
            }
            tbody>tr>td{
            margin-right:40px;
            }

.button {
  background: lightgreen;
  padding: 1em 2em;
  color: #fff;
  border: 0;
  border-radius: 5px;
  cursor: pointer;
}



.modal {
  display: none;
  position: fixed;
  z-index: 1;
  left: 0;
  top: 0;
  height: 100%;
  width: 100%;
  overflow: auto;
  background-color: rgba(0, 0, 0, 0.5);
}

.modal-content {
  margin: 10% auto;
  width: 60%;
  box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 7px 20px 0 rgba(0, 0, 0, 0.17);
  animation-name: modalopen;
  animation-duration: var(--modal-duration);
}

.modal-header h2,
.modal-footer h3 {
  margin: 0;
}

.modal-header {
  background: var(--modal-color);
  padding: 15px;
  color: #fff;
  border-top-left-radius: 5px;
  border-top-right-radius: 5px;
}

.modal-body {
  padding: 10px 20px;
  background: #fff;
}

.modal-footer {
  background: var(--modal-color);
  padding: 10px;
  color: #fff;
  text-align: center;
  border-bottom-left-radius: 5px;
  border-bottom-right-radius: 5px;
}

.close {
  color: #ccc;
  float: right;
  font-size: 30px;
  color: #fff;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

@keyframes modalopen {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}

        </style>
    </head>
    <body>
        <input type="hidden" name="host" id="host" value="<?=base_url()?>">

        <div class="col-md-12" id="video_div_block">
            <div class="video-player">
                

            </div>
        </div>
        <header id="header" class="bg-custom">
            <div class="h-logo">
                <a href="/associate/dashboard" class="hidden-xs">
                    <img src="<?php echo base_url()?>assets/images/logo.png" alt="dailyGate_logo" style="width:120px;">
                </a>
                <div class="menu-collapse" data-ma-action="sidebar-open" data-ma-target="main-menu">
                    <div class="mc-wrap">
                        <div class="mcw-line top palette-White bg"></div>
                        <div class="mcw-line center palette-White bg"></div>
                        <div class="mcw-line bottom palette-White bg"></div>
                    </div>
                </div>
            </div>
            <div class="custom-c-header">
                <li class="search-icon show-serach c-pointer  list-none">
                    <input type="text" class="search-input c-white search-input-w" id="search_video"  placeholder="Search ">
                </li>
            </div>
        </header>
