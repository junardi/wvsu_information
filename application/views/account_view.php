

<?php   
    echo $this->session->flashdata('account_message');
?>   

<div>
	<div class="col-xs-12" style="margin-top: 90px;">    
        <div class="panel panel-default">
            <!-- Default panel contents -->
            <div class="panel-heading"><h3>Pending Accounts</h3></div>

            <!-- Table -->
            <table class="table">
                <thead>   
                    <th>Email</th>   
                    <th>Username</th>
                    <th>Name</th>
                    <th>Date of Birth</th>
                    <th>Gender</th>   
                    <th>Civil Status</th>   
                    <th>Occupation</th>
                    <th>Contact Number</th>
                    <th>Year Graduated</th>
                    <th>Course</th>   
                    <th>Delete</th>
                    <th>Approve</th>
                </thead>  
                <tbody>       

                    <?php foreach($users as $user) { ?>
                    <tr>   
                        <td><?php echo $user->email; ?></td>   
                        <td><?php echo $user->username; ?></td>
                        <td><?php echo $user->full_name; ?></td>
                        <td><?php echo $user->date_of_birth; ?></td>
                        <td><?php echo $user->gender; ?></td>  
                        <td><?php echo $user->civil_status; ?></td>   
                        <td><?php echo $user->occupation; ?></td>
                        <td><?php echo $user->contact_no; ?></td>
                        <td><?php echo $user->year_graduated; ?></td>
                        <td><?php echo $user->course; ?></td>
                        <td><a href="<?php echo base_url(); ?>index.php/account/delete?user_id=<?php echo $user->user_id;  ?>" class="btn btn-danger" role="button">Delete</a></td>  
                        <td><a href="<?php echo base_url(); ?>index.php/account/approve?user_id=<?php echo $user->user_id; ?>&email=<?php echo $user->email; ?>" class="btn btn-primary" role="button">Approve</a></td>
                        <td></td>
                    </tr>   
                    <?php  } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- /padding -->
			