<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php if($_SESSION['role']==1){?>
 <div class="span3" id="sidebar">
                   
                  
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
				
                </div>
     <?php }?>	             
