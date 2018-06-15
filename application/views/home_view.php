<div class="padding">
    <div class="full col-sm-9">

        <!-- content -->
        <div class="row">

            <!-- main col left -->
            <div class="col-sm-5">

                <div class="panel panel-default">
                    <div class="panel-thumbnail">
                        <img src="<?php echo base_url(); ?>images/undefined.jpg" class="img-responsive profile_image">
                    </div>
                    <div class="panel-body">
                        <p class="lead profile_name">
                            <?php echo $this->session->userdata("full_name"); ?>
                        </p>
                        <!--      <p>45 Friends, 13 Posts</p> -->

				                        <!--  <p>
						<img src="https://lh3.googleusercontent.com/uFp_tsTJboUY7kue5XAsGA=s28" width="28px" height="28px">
						</p> -->
                    </div>
                </div>


				<?php if($this->session->userdata('role') == 'admin') { ?>
                <div class="well">
                    <form method="post" action="<?php echo base_url(); ?>index.php/home/create_event" id="create_event" class="form-horizontal" role="form">
                        <h4>What's New</h4>
                        <div class="form-group" style="padding:14px;">
                            <textarea name="event" required class="form-control" placeholder="Create an event"></textarea>
                        </div>  
                        <button class="btn btn-primary pull-right" type="submit">Create</button>  
                        <br> 
                        <ul class="list-inline">
					                            <!--   <li>
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
							</li> -->
                        </ul>
                    </form>  
                </div>       

                <div class="well">
                    <form method="post" action="<?php echo base_url(); ?>index.php/home/create_project" id="create_project" class="form-horizontal" role="form">
                        <h4>New Project</h4>
                        <div class="form-group" style="padding:14px;">
                            <textarea name="project" required class="form-control" placeholder="Create new project"></textarea>
                        </div>  
                        <button class="btn btn-primary pull-right" type="submit">Create</button>  
                        <br> 
                        <ul class="list-inline">
                                                <!--   <li>
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
                            </li> -->
                        </ul>
                    </form>
                </div>

                <?php } ?>

            </div>


            <!-- main col right -->
            <div class="col-sm-7">

                <div class="panel panel-default" ng-repeat="wall in walls | orderBy: '-date_created'">
                    
                    <div ng-if="wall.wall_type == 'Event'" class="inner_wall_container">
                        <div class="panel-heading">
                            <a ng-if="wall.is_current_user" href="<?php echo base_url(); ?>index.php/home/delete_event?event_id={{wall.event_id}}" class="pull-right delete_event_link"><button type="button" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button></a>
                            <h4>{{wall.wall_type}}</h4>
                        </div>
                        <div class="panel-body">
                            <p>
                            	{{wall.event}} 
                            </p>
                            <hr>
                            <form  class="create_event_comment" method="post" action="<?php echo base_url(); ?>index.php/home/create_event_comment">
                                <div class="input-group">
                                    <div class="input-group-btn">
                                     
                                        <button type="submit" class="btn btn-default">
                                            <i class="glyphicon glyphicon-share"></i>
                                        </button>
                                    </div>   
                                    <input type="hidden" name="event_id" class="event_id" value="{{wall.event_id}}">
                                    <input type="text" required name="comment" class="form-control comment" placeholder="Add a comment..">
                                </div>
                            </form>    
                            <br>
                            <div class="list-group list_comments" ng-repeat="comment in wall.comments">
                                <div class="comment_list">  
                                    <a ng-if="comment.is_current_user" href="<?php echo base_url(); ?>index.php/home/delete_event_comment?event_comment_id={{comment.event_comment_id}}" class="pull-right delete_event_comment_link"><button type="button" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button></a>
                                    <h6 class="list-group-item-heading">{{comment.full_name}}</h6>
                                    <p class="list-group-item-text">{{comment.comment}}</p>  
                                </div>
                            </div>
                        </div>      
                    </div>  <!-- end ng if -->   


                    <div ng-if="wall.wall_type == 'Project'" class="inner_wall_container">
                        <div class="panel-heading">
                            <a ng-if="wall.is_current_user" href="<?php echo base_url(); ?>index.php/home/delete_project?project_id={{wall.project_id}}" class="pull-right delete_project_link"><button type="button" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button></a>
                            <h4>{{wall.wall_type}}</h4>
                        </div>
                        <div class="panel-body">
                            <p>
                                {{wall.project}} 
                            </p>
                            <hr>
                            <form  class="create_project_comment" method="post" action="<?php echo base_url(); ?>index.php/home/create_project_comment">
                                <div class="input-group">
                                    <div class="input-group-btn">
                                     
                                        <button type="submit" class="btn btn-default">
                                            <i class="glyphicon glyphicon-share"></i>
                                        </button>
                                    </div>   
                                    <input type="hidden" name="project_id" class="project_id" value="{{wall.project_id}}">
                                    <input type="text" required name="comment" class="form-control comment" placeholder="Add a comment..">
                                </div>
                            </form>    
                            <br>
                            <div class="list-group list_comments" ng-repeat="comment in wall.comments">
                                <div class="comment_list">  
                                    <a ng-if="comment.is_current_user" href="<?php echo base_url(); ?>index.php/home/delete_project_comment?project_comment_id={{comment.project_comment_id}}" class="pull-right delete_project_comment_link"><button type="button" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button></a>
                                    <h6 class="list-group-item-heading">{{comment.full_name}}</h6>
                                    <p class="list-group-item-text">{{comment.comment}}</p>  
                                </div>
                            </div>
                        </div>      
                    </div>  <!-- end ng if -->
                
                </div> <!-- end panel -->

            </div>
        </div>