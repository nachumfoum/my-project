<?php 
    $pro = mysqli_query($con, "select * from  applicant where email = '".$_SESSION['user']."'");
    $profile = mysqli_fetch_array($pro);
?>

<aside>
                <div class="card border-0 shadow-sm rounded-0">
                    <div class="card-body h-fixed w-fixed">
                        <ul class='nav mt-4'>
                            <li class='list-none mb-2'>
                                <i class="bi bi-house-fill text-danger display-7"></i>
                                <a href="./" class='text-none font-f text-black'> Dashbroad </a>
                            </li>

                                         <li class='list-none mb-2'>
                                            <i class="bi bi-people-fill text-danger display-7"></i> 
                                            <a href="post.php" class='text-none font-f text-black'> Jop post lists</a>
                                        </li>

                                        <li class='list-none mb-2'>
                                            <i class="bi bi-card-text text-danger display-7"></i> 
                                            <a href="application.php" class='text-none font-f text-black'> My applicantions</a>
                                        </li> 

                                        <li class='list-none mb-2'>
                                            <i class="bi bi-card-text text-danger display-7"></i> 
                                            <a href="myPrfile.php" class='text-none font-f text-black'> My profle </a>
                                        </li>

            
                            <li class='list-none mb-2'>
                                <i class="bi bi-gear-fill text-danger  display-7"></i>
                                <a href="changePassword.php" class='text-none font-f text-black mb-1'> Settings <span class='text-white'>data center</span> </a>
                            </li>


                            <li class='list-none'>
                                <i class="bi bi-box-arrow-in-right text-danger  display-7"></i> 
                                <a href="../inc/logOut.php" class='text-none font-f text-black'> Logout</a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </aside>