<?php include_once "topHeader.php"; ?>

            <div class='container-fluid mt-5'>
                    <div class="card border-0 shadow-sm rounded-0">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-10">
                            <p class="h4 font-f">Manage application </p>
                          </div>
                        </div>
                        
                        <table class='table table-hover table-bordered mt-1' id="post-table">

                          <thead>
                            <tr>
                              <th width='1%'>S/N</th>
                              <th>Applicant name</th>
                              <th>Email address</th>
                              <th >Position</th>
                              <th >Office name</th>
                              <th >Education level</th>
                              <th>GPA </th>
                              <th>Status</th>
                              <th>Date </th>
                              <th >CV</th>
                              
                            </tr>
                          </thead>

                          <tbody>
                            <?php
                              $no =  1;
                              $app = mysqli_query($con,"select a.*, p.*, s.* from application a JOIN post p ON a.postId = p.postID  JOIN applicant s ON a.applicantEmail = s.email  order by a.gpa desc; ");
                              while ($query = mysqli_fetch_array($app)) {
                            ?>
                              <tr>
                                      <td class='text-center'><?php echo $no; ?></td>
                                      <td><?php echo ucwords($query['firstName']." ".$query['lastName']); ?> </td>
                                      <td><?php echo $query['email']; ?> </td>
                                        <td><?php echo $query['position']." - ( ".$query['amount']." )"; ?> </td>
                                        <td> <?php echo $query['officeName']; ?></td>
                                        <td> <?php echo $query['education']; ?></td>
                                        <td> <?php echo $query['gpa']; ?></td>
                                        <td><?php echo $query['appStatus']; ?></td>
                                        <td> <?php echo $query['postDate']; ?></td>
                                        <td>
                                            <a class="btn btn-info border-0" href="../applicant/cv/<?php echo $query['cv']; ?>" target="_blank" style="background-color:rgba(255, 93, 69, 0.6);">viewCV</a>
                                        </td>
                            
                              </tr>
                            <?php $no +=1; }?>

                            
                          </tbody>
                        </table>
                      </div>
                    </div>
                </div>
                
            </div>
        </div>
</body>
</html>