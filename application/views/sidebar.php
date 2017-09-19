<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

 <div class="span3" id="sidebar">
                   
                  
				   
                        
						<?php 
						
						$role = $_SESSION['role'];
						
						
						?>
					

                    <!-- Super	Administrator -->				
					<?php if ($role ==1){?>
					<ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
						<li class="active">
                            <a href="welcome/dashboard"><i class="icon-chevron-right"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="client"><i class="icon-chevron-right"></i> Client Management</a>
							
                        </li>
                        <li>
                            <a href="vehicle"><i class="icon-chevron-right"></i> Vehicle Management</a>
                        </li>
						<li>
                            <a href="maintainance"><i class="icon-chevron-right"></i> Vehicle Maintainance</a>
                        </li>
                        <li>
                            <a href="driver"><i class="icon-chevron-right"></i> Driver Management</a>
                        </li>
                        
						 <li>
                            <a href="invoice"><i class="icon-chevron-right"></i> Invoice Management</a>
                        </li>
                        <li>
                            <a href="trips"><i class="icon-chevron-right"></i> Daily Trip(s)</a>
                        </li>
                        <li>
                            <a href="notifications"><i class="icon-chevron-right"></i> Notifications </a>
                        </li>
                        <li>
                            <a href="reports"><i class="icon-chevron-right"></i> Reports</a>
                        </li>
                        
                        <li>
                            <a href="settings"> Settings</a>
                        </li>
						<li>
                            <a href="admin"><i class="icon-chevron-right"></i> Admin Management</a>
							
                        </li>
                    </ul>
					<?php }  ?>
				
				<!-- Client -->				
					<?php if ($role ==5){?>
					<ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
						<li class="active">
                            <a href="welcome/dashboard"><i class="icon-chevron-right"></i> Dashboard</a>
                        </li>

                        <li>
                            <a href="vehicle"><i class="icon-chevron-right"></i> Vehicle Management</a>
                        </li>
						<li>
                            <a href="maintainance"><i class="icon-chevron-right"></i> Vehicle Maintainance</a>
                        </li>
                        <li>
                            <a href="driver"><i class="icon-chevron-right"></i> Driver Management</a>
                        </li>
                        
						 <li>
                            <a href="invoice"><i class="icon-chevron-right"></i> Invoice Management</a>
                        </li>
                        <li>
                            <a href="trips"><i class="icon-chevron-right"></i> Daily Trip(s)</a>
                        </li>
                        <li>
                            <a href="notifications"><i class="icon-chevron-right"></i> Notifications </a>
                        </li>
                        <li>
                            <a href="reports"><i class="icon-chevron-right"></i> Reports</a>
                        </li>
                        
                        <li>
                            <a href="settings"> Settings</a>
                        </li>
						<li>
                            <a href="admin"><i class="icon-chevron-right"></i> Admin Management</a>
							
                        </li>
                    </ul>
					<?php }  ?>
				
				
				
				 <!-- Owner of company -->				
					<?php if ($role ==2){?>
					<ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
						<li class="active">
                            <a href="welcome/dashboard"><i class="icon-chevron-right"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="client"><i class="icon-chevron-right"></i> Client Management</a>
							
                        </li>
                        <li>
                            <a href="vehicle"><i class="icon-chevron-right"></i> Vehicle Management</a>
                        </li>
						<li>
                            <a href="maintainance"><i class="icon-chevron-right"></i> Vehicle Maintainance</a>
                        </li>
                        <li>
                            <a href="driver"><i class="icon-chevron-right"></i> Driver Management</a>
                        </li>
                        
						 <li>
                            <a href="invoice"><i class="icon-chevron-right"></i> Invoice Management</a>
                        </li>
                        <li>
                            <a href="trips"><i class="icon-chevron-right"></i> Daily Trip(s)</a>
                        </li>
                        <li>
                            <a href="notifications"><i class="icon-chevron-right"></i> Notifications </a>
                        </li>
                        <li>
                            <a href="reports"><i class="icon-chevron-right"></i> Reports</a>
                        </li>
                        
                        <li>
                            <a href="settings"> Settings</a>
                        </li>
						<li>
                            <a href="admin"><i class="icon-chevron-right"></i> Admin Management</a>
							
                        </li>
                    </ul>
					<?php }  ?>
					
					
					<!-- Fleet Manager -->				
					<?php if ($role ==3){?>
					<ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
						<li class="active">
                            <a href="welcome/dashboard"><i class="icon-chevron-right"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="client"><i class="icon-chevron-right"></i> Client Management</a>
							
                        </li>
                        <li>
                            <a href="vehicle"><i class="icon-chevron-right"></i> Vehicle Management</a>
                        </li>
						<li>
                            <a href="maintainance"><i class="icon-chevron-right"></i> Vehicle Maintainance</a>
                        </li>
                        <li>
                            <a href="driver"><i class="icon-chevron-right"></i> Driver Management</a>
                        </li>
                        
						 <li>
                            <a href="invoice"><i class="icon-chevron-right"></i> Invoice Management</a>
                        </li>
                        <li>
                            <a href="trips"><i class="icon-chevron-right"></i> Daily Trip(s)</a>
                        </li>
                        <li>
                            <a href="notifications"><i class="icon-chevron-right"></i> Notifications </a>
                        </li>
                        <li>
                            <a href="reports"><i class="icon-chevron-right"></i> Reports</a>
                        </li>
                        
                        <li>
                            <a href="settings"> Settings</a>
                        </li>
						<li>
                            <a href="admin"><i class="icon-chevron-right"></i> Admin Management</a>
							
                        </li>
                    </ul>
					<?php }  ?>
					
					
					<!-- Finance-->				
					<?php if ($role ==2){?>
					<ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
						<li class="active">
                            <a href="welcome/dashboard"><i class="icon-chevron-right"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="client"><i class="icon-chevron-right"></i> Client Management</a>
							
                        </li>
                        <li>
                            <a href="vehicle"><i class="icon-chevron-right"></i> Vehicle Management</a>
                        </li>
						<li>
                            <a href="maintainance"><i class="icon-chevron-right"></i> Vehicle Maintainance</a>
                        </li>
                        <li>
                            <a href="driver"><i class="icon-chevron-right"></i> Driver Management</a>
                        </li>
                        
						 <li>
                            <a href="invoice"><i class="icon-chevron-right"></i> Invoice Management</a>
                        </li>
                        <li>
                            <a href="trips"><i class="icon-chevron-right"></i> Daily Trip(s)</a>
                        </li>
                        <li>
                            <a href="notifications"><i class="icon-chevron-right"></i> Notifications </a>
                        </li>
                        <li>
                            <a href="reports"><i class="icon-chevron-right"></i> Reports</a>
                        </li>
                        
                        <li>
                            <a href="settings"> Settings</a>
                        </li>
						<li>
                            <a href="admin"><i class="icon-chevron-right"></i> Admin Management</a>
							
                        </li>
                    </ul>
					<?php }  ?>
					
                </div>
    	             
