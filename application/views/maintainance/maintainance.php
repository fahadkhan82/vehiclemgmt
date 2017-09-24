<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<?php $this->view('header_inner'); ?>
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
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i> Vincent Gabriel <i class="caret"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="#">Profile</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a tabindex="-1" href="login.html">Logout</a>
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
                                <div class="muted pull-left">Vehicle Maintainance</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                   <div class="table-toolbar">
                                      <div class="btn-group">
                                         <!--<a href="#"><button class="btn btn-success"><i class="icon-plus icon-white"></i>New Maintainance Record</button></a>-->
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
                                                <th>Model</th>
                                                <th>Make</th>
                                                <th>Year</th>
                                                <th>Type</th>
                                                <th>Client</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($result  as $r): ?>
                                            <tr class="odd gradeX">
                                                <td><?php echo $r->model; ?></td>
                                                <td><?php echo $r->make; ?></td>
                                                <td><?php echo $r->year; ?></td>
                                                <td><?php echo $r->type; ?></td>
                                                <td ><?php echo $r->cid; ?>-<?php echo $r->fname; ?>&nbsp;<?php echo $r->lname; ?></td>
                                                <td ><a href="maintainance/add?vid=<?php echo $r->id; ?>">Add Maintainanace Record</a> </td>
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