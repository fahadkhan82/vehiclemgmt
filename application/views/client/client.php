<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<?php $this->view('./header_inner'); ?>
  <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="#">Admin Panel</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav pull-right">
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i> <?php echo $_SESSION['fname']?> <?php echo $_SESSION['lname']?><i class="caret"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="#">Profile</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a tabindex="-1" href="welcome/logout">Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <?php $this->view('top_menu'); ?>

                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row-fluid">
			<?php $this->view('sidebar'); ?>
                
                <!--/span-->
                <div class="span9" id="content">
				
                     <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Client Management</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                   <div class="table-toolbar">
                                      <div class="btn-group">
                                         <a href="client/add"><button class="btn btn-success">Add New <i class="icon-plus icon-white"></i></button></a>
                                      </div>
                                     <!-- <div class="btn-group pull-right">
                                         <button data-toggle="dropdown" class="btn dropdown-toggle">Tools <span class="caret"></span></button>
                                         <ul class="dropdown-menu">
                                            <li><a href="#">Print</a></li>
                                            <li><a href="#">Save as PDF</a></li>
                                            <li><a href="#">Export to Excel</a></li>
                                         </ul>
                                      </div>-->
                                   </div>
                                    
                                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example2">
                                        <thead>
                                            <tr>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>City</th>
                                                <th>CNIC</th>
												<th>Client-id</th>
                                                <th>Tenure</th>
												<th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php foreach($result  as $r): ?>
                                            <tr class="odd gradeX">
                                                <td><?php echo $r->fname; ?></td>
                                                <td><?php echo $r->lname; ?></td>
                                                <td><?php echo $r->city; ?></td>
                                                <td ><?php echo $r->cnic; ?></td>
												<td ><?php echo $r->id; ?></td>
                                                <td ><?php echo $r->tenure; ?></td>
												<td ><a href="<?php echo $r->tenure; ?>">View</a> | <a href="<?php echo $r->tenure; ?>">Edit</a> | <a href="<?php echo $r->tenure; ?>">Delete</a> | <a href="vehicle/listVehiclebyID?cid=<?php echo $r->id; ?>">Vehicles</a></td>
                                            </tr>
                                        <?php endforeach; ?>    
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
                </div>
            </div>
           
        </div>
        <!--/.fluid-container-->

<?php $this->view('footer'); ?>