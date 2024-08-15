<?php include_once "topHeader.php"; ?>

            <div class='container-fluid mt-5'>
                    <div class="card border-0 shadow-sm rounded-0">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-10">
                            <p class="h4 font-f">Manage organization </p>
                          </div>
                          <div class="col-md-2">
                            <a href="addOrg.php" class="btn btn-primary mb-3 text-black border-0 border-2" style="background-color:rgba(255, 93, 69, 0.6);">Register organization</a>
                          </div>
                        </div>
                        
                        <table class='table table-hover table-bordered mt-1' id="post-table">

                          <thead>
                            <tr>
                              <th width='1%'>S/N</th>
                              <th >Email address</th>
                              <th >Full name</th>
                              <th>Office name</th>
                              <th>Phone number</th>
                              <th width='8%'>Edit</th>
                              <!-- <th width='8%'>Delete</th> -->
                            </tr>
                          </thead>

                          <tbody>
                          <?php
                              $no =  1;
                              $org = mysqli_query($con,"select * from organization ");
                              while ($query = mysqli_fetch_array($org)) {
                            ?>
                              <tr >
                                      <td class='text-center'><?php echo $no; ?></td>
                                        <td> <?php echo $query['email']; ?></td>
                                        <td><?php echo ucwords($query['firstName']." ".$query['lastName']); ?></td>
                                        <td><?php echo ucwords($query['officeName']); ?></td>
                                        <td><?php echo $query['phoneNumber']; ?></td>
                                        <td class='text-center'>
                                          <a href="addOrg.php?edit=<?php echo $query['id']; ?>&em=<?php  echo $query['email'] ?>&fn=<?php echo $query['firstName']; ?>&ln=<?php  echo $query['lastName'] ?>&of=<?php echo $query['officeName']; ?>&pn=<?php  echo $query['phoneNumber'] ?>"  class='btn btn-success' >Edit</a>

                                        </td>
                                        <!-- <td class='text-center'>
                                          <button class='btn btn-danger' >Delete</button>
                                        </td> -->
                              </tr>

                            <?php $no += 1; }?>

                            
                          </tbody>
                        </table>
                      </div>
                    </div>
                </div>
                
            </div>
        </div>
</body>
</html>