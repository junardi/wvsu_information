    <div class="row" id="footer">
                            
                                <div class="col-sm-12">
                                    <p>
                                        <a href="#" class="text-center">WVSU-JC Information System</a>
                                    </p>
                                </div>
                            </div>

                        


                        </div>
                        <!-- /col-9 -->
                    </div>
                    <!-- /padding -->
                </div>
                <!-- /main -->

            </div>
        </div>
    </div>


    <!--post modal-->
    <div id="postModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    Update Status
                </div>
                <div class="modal-body">
                    <form class="form center-block">
                        <div class="form-group">
                            <textarea class="form-control input-lg" autofocus="" placeholder="What do you want to share?"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <div>
                        <button class="btn btn-primary btn-sm" data-dismiss="modal" aria-hidden="true">Post</button>
                        <ul class="pull-left list-inline">
                            <li>
                                <a href="">
                                    <i class="glyphicon glyphicon-upload"></i>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <i class="glyphicon glyphicon-camera"></i>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <i class="glyphicon glyphicon-map-marker"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type='text/javascript' src="<?php echo base_url(); ?>js/jquery-3.3.1.min.js"></script>
    <script type='text/javascript' src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>

    <!-- JavaScript jQuery code from Bootply.com editor  -->

    <script type='text/javascript'>
        $(document).ready(function () {

            /* off-canvas sidebar toggle */

            $('[data-toggle=offcanvas]').click(function () {
                $(this).toggleClass('visible-xs text-center');
                $(this).find('i').toggleClass('glyphicon-chevron-right glyphicon-chevron-left');
                $('.row-offcanvas').toggleClass('active');
                $('#lg-menu').toggleClass('hidden-xs').toggleClass('visible-xs');
                $('#xs-menu').toggleClass('visible-xs').toggleClass('hidden-xs');
                $('#btnShow').toggle();
            });

        });

    </script>   

    <script type='text/javascript' src="<?php echo base_url(); ?>js/jquery.form.js"></script>
    <script type='text/javascript' src="<?php echo base_url(); ?>js/scripts.js"></script>   

    <!-- below are for angular scripts -->
    <script type="text/javascript" src="<?php echo base_url(); ?>js/angular/angular.min.js"></script>   
    <script type="text/javascript" src="<?php echo base_url(); ?>js/angular/angular-sanitize.min.js"></script> 
    <script type="text/javascript" src="<?php echo base_url(); ?>js/angularJS/app.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/angularJS/services.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/angularJS/controllers.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/angularJS/filters.js"></script>
    

</body>

</html>