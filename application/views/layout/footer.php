<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
                        </div>
                    </div>
                    <div class="mt-30">

                        <!-- Modal to select organization -->
                        <div class="modal fade" id="select-organization-modal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Select Organization</h4>
                                    </div>
                                    <div class="modal-body" id="list-organizations">

                                    </div>
                                    <div class="modal-footer">

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Modal super user mode -->
                        <div class="modal fade" id="select-associate-modal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Select Associate</h4>
                                    </div>
                                    <div class="modal-body" id="list-associate">
                                        <div class="form-group col-md-12 fg-line">
                                              <div class="m-b-15 promgr_select">
                                                  <p class="f-500 c-black m-b-15">Select Associate <span class="text-danger">*</span></p>
                                                  <select class="chosen" data-placeholder="Select project manager" name="e_p_a_pmanager" id="e-p-a-pmanager">
                                                      <optgroup label="Select Project Manager">
                                                      </optgroup>
                                                  </select>
                                              </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-primary" onclick="switchToAssociate(); return false;">Switch</button>
                                        <button type="button" id="cls-modal" onclick="resetSuperMode(); return false;" class="btn palette-Grey bg waves-effect" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>
        <input type="hidden" name="" id="default_company">
    </body>

    <!-- Javascript Libraries -->
    <script src="<?php echo base_url()?>assets/material-theme/vendors/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-treeview/1.2.0/bootstrap-treeview.min.js" integrity="sha512-Hyk+1XSRfagqzuSHE8M856g295mX1i5rfSV5yRugcYFlvQiE3BKgg5oFRfX45s7I8qzMYFa8gbFy9xMFbX7Lqw==" crossorigin="anonymous"></script>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <script src="<?php echo base_url()?>assets/material-theme/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>assets/material-theme/vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="<?php echo base_url()?>assets/material-theme/vendors/bower_components/Waves/dist/waves.min.js"></script>
    <script src="<?php echo base_url()?>assets/material-theme/vendors/bootstrap-growl/bootstrap-growl.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js" integrity="sha512-G9dfCJFG3y/Xq8mbbqb5i3FQNVaGl0Fkkw+VPVT3L00gA4k7hyjSGNpAxykwgDw1cfJFlj5tO3XePa+ezjDQyQ==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js" integrity="sha512-o0rWIsZigOfRAgBxl4puyd0t6YKzeAw9em/29Ag7lhCQfaaua/mDwnpE2PVzwqJ08N7/wqrgdjc2E0mwdSY2Tg==" crossorigin="anonymous"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" integrity="sha512-uto9mlQzrs59VwILcLiRYeLKPPbS/bT71da/OEBYEwcdNUk8jYIy+D176RYoop1Da+f9mvkYrmj5MCLZWEtQuA==" crossorigin="anonymous"></script> -->
    <script src="<?php echo base_url()?>assets/material-theme/vendors/bower_components/simpleWeather/jquery.simpleWeather.min.js"></script>
    <script src="<?php echo base_url()?>assets/material-theme/vendors/bower_components/salvattore/dist/salvattore.min.js"></script>
    <script src="<?php echo base_url()?>assets/material-theme/vendors/bootgrid/jquery.bootgrid.updated.min.js"></script>
    <script src="<?php echo base_url()?>assets/material-theme/vendors/bower_components/flot/jquery.flot.js"></script>
    <script src="<?php echo base_url()?>assets/material-theme/vendors/bower_components/flot/jquery.flot.resize.js"></script>
    <script src="<?php echo base_url()?>assets/material-theme/vendors/bower_components/flot.curvedlines/curvedLines.js"></script>
    <script src="<?php echo base_url()?>assets/material-theme/vendors/sparklines/jquery.sparkline.min.js"></script>
    <script src="<?php echo base_url()?>assets/material-theme/vendors/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
    <script src="<?php echo base_url()?>assets/material-theme/js/flot-charts/curved-line-chart.js"></script>
    <script src="<?php echo base_url()?>assets/material-theme/js/flot-charts/line-chart.js"></script>
    <script src="<?php echo base_url()?>assets/material-theme/vendors/bower_components/bootstrap-sweetalert/lib/sweet-alert.min.js"></script>
    <script src="<?php echo base_url()?>assets/material-theme/vendors/fileinput/fileinput.min.js"></script>
    <script src="<?php echo base_url()?>assets/material-theme/vendors/bower_components/eonasdan-bootstrap-datetimepicker/src/js/bootstrap-datetimepicker.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/locale/en-gb.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.js"></script>
    <script src="<?php echo base_url()?>assets/material-theme/vendors/bower_components/nouislider/distribute/jquery.nouislider.all.min.js"></script>
    <script src="<?php echo base_url()?>assets/material-theme/vendors/bower_components/chosen/chosen.jquery.min.js"></script>
    <script src="<?php echo base_url()?>assets/material-theme/vendors/bower_components/bootstrap-select/dist/js/bootstrap-select.js"></script>


    <script src="<?php echo base_url()?>assets/material-theme/js/charts.js"></script>
    <script src="<?php echo base_url()?>assets/material-theme/js/functions.js"></script>
    <script src="<?php echo base_url()?>assets/material-theme/js/actions.js"></script>
    <script src="<?php echo base_url()?>assets/material-theme/js/demo.js"></script>

    <script src="<?php echo base_url()?>assets/js/request.js"></script>
    <script src="<?php echo base_url()?>assets/js/jquery.cookie.js"></script>
    <script src="<?php echo base_url()?>assets/js/button-effects.js"></script>
    <script src="<?php echo base_url()?>assets/js/ImageSelect.jquery.js"></script>
    <script src="<?php echo base_url()?>assets/js/app.js"></script>
    <script src="<?php echo base_url()?>assets/js/jquery.table2excel.js"></script>
    <script src="<?php echo base_url()?>assets/js/owl.carousel.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="<?php echo base_url()?>assets/js/excelexportjs.js" charset="utf-8"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/rollups/aes.js" integrity="sha256-/H4YS+7aYb9kJ5OKhFYPUjSJdrtV6AeyJOtTkw6X72o=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.0.0/jquery.magnific-popup.min.js" charset="utf-8"></script>
    <script src="<?php echo base_url()?>assets/js/parsley.min.js" charset="utf-8"></script>
    <script src="<?php echo base_url()?>assets/js/custom.js" charset="utf-8"></script>
    <script src="<?php echo base_url()?>Api-Plugins\tour_process.js" charset="utf-8"></script>
    <script type="text/javascript">
    $(document).ready(function(){
        load_toturial_video();

        $(document).on("keyup","#search_video",function(){
            load_toturial_video();
        });
        
	});

    </script>
</html>
