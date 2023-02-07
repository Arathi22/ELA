<?php 
session_start();
if(!isset($_SESSION['sid']))
{
  header('Location:../index.php');
}
?>
 <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a class="active-menu" href="home.php"><i class="fa fa-dashboard"></i>Status</a>
                    </li>
                    <!-- <li>
                        <a href="post.php"><i class="fa fa-desktop"></i> Post</a>
                    </li>
                   
                    <li>
                        <a href="resume.php"><i class="fa fa-desktop"></i> Resumes</a>
                    </li> -->
                    
                    <li>
                        <a href="payment.php"><i class="fa fa-desktop"></i>Payment</a>
                    </li>
                    
                    
                     <li>
                        <a href="leaves1.php"><i class="fa fa-desktop"></i>Leaves</a>
                    </li>
                    <li>
                        <a href="overtime1.php"><i class="fa fa-desktop"></i>overtime</a>
                    </li>
                    
                    
                    
                    
                    <li>
                        <a href="../logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                   


                    
                    </ul>
                   
            </div>

        </nav>