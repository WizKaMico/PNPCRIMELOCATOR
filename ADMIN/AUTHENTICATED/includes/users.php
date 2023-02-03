       <div class="row">
          <div class="col-md-4">
            <div class="card card-user">
              <div class="image">
                <img src="../assets/img/damir-bosnjak.jpg" alt="...">
              </div>
              <div class="card-body">
                <div class="author">
                  <?php if(!empty($row['imagesrc'])){  ?>
                  <a href="#" data-toggle="modal" data-target="#edit<?php echo $row['UserID']?>">
                    <img class="avatar border-gray" src="action/<?php echo $row['imagesrc']?>" alt="...">
                    <h5 class="title"><?php echo strtoupper($row['Name']); ?></h5>
                  </a>

                <div class="modal fade" id="edit<?php echo $row['UserID']?>" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <form method="POST" enctype="multipart/form-data" action="action/reuploadprofile.php">
                        <div class="modal-header">
                          <h3 class="modal-title">Edit Image | <?php echo $row['UserID']?></h3>
                        </div>
                        <div class="modal-body">
                          <div class="col-md-2"></div>
                          <div class="col-md-8">
                            <div class="form-group">
                              <input type="hidden" name="UserID" value="<?php echo $row['UserID']; ?>">
                              <h3>Current Photo</h3>
                              <center><img src="action/<?php echo $row['imagesrc']?>" height="120" width="150" /></center>
                              <input type="hidden" name="previous" value="action/<?php echo $row['imagesrc']?>"/>
                              <h3>New Photo</h3>
                              <input type="file" class="form-control" name="photo" value="<?php echo $row['imagesrc']?>" required="required"/>
                            </div>
                          </div>
                        </div>
                        <br style="clear:both;"/>
                        <div class="modal-footer">
                          <button class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
                          <button class="btn btn-warning" name="edit"><span class="glyphicon glyphicon-save"></span> Update</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>      

                  <?php } else { ?>
                  <a href="#" data-toggle="modal" data-target="#form_modal">
                    <img class="avatar border-gray" src="../assets/img/mike.jpg" alt="...">
                    <h5 class="title"><?php echo strtoupper($row['Name']); ?></h5>
                  </a>  
                  <?php } ?>
                  <p class="description">
                   ROLE : <?php echo strtoupper($row['Role']); ?>
                  </p>
                </div>

              <div class="modal fade" id="form_modal" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <form method="POST" action="action/uploadprofile.php" enctype="multipart/form-data">
                      <div class="modal-header">
                        <h3 class="modal-title">UPLOAD IMAGE</h3>
                      </div>
                      <div class="modal-body">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                          <div class="form-group">
                            <label>Photo</label>
                            <input type="hidden" name="UserID" value="<?php echo $row['UserID']; ?>">
                            <input type="file" class="form-control" name="photo" required="required"/>
                          </div>
                        </div>
                      </div>
                      <br style="clear:both;"/>
                      <div class="modal-footer">
                        <button class="btn btn-danger" type="button" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
                        <button class="btn btn-primary" name="save"><span class="glyphicon glyphicon-save"></span> Save</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
         

               
         
            
            </div>
          </div>
        </div>
          <div class="col-md-8">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">Edit Profile</h5>
              </div>
              <div class="card-body">
                <form action="action/update.php" method="POST">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Office Station</label>
                         <input type="hidden" name="UserID" class="form-control" value="<?php echo $row['UserID']; ?>">
                        <input type="text" name="OfficeStation" class="form-control" value="<?php echo $row['OfficeStation']; ?>">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Roles</label>
                        <input type="text"  name="Role" value="<?php echo $row['Role']; ?>" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="Email" class="form-control" value="<?php echo $row['Email']; ?>">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>WCPC</label>
                        <input type="text" name="WCPC" class="form-control" value="<?php echo $row['WCPC']; ?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Status</label>
                        <input type="text" name="Status" class="form-control" value="<?php echo $row['Status']?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Last Login:</label>
                        <input type="text"  name="LastLogin" class="form-control" value="<?php echo $row['LastLogin']?>">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Latest Login:</label>
                        <input type="text" name="LatestLogin" class="form-control" value="<?php echo $row['LatestLogin']?>">
                      </div>
                    </div>
                      <div class="col-md-12">
                      <div class="form-group">
                        <label>Rank:</label>
                        <input type="text" name="Rank" class="form-control" value="<?php echo $row['Rank']?>">
                      </div>
                    </div>
                     <div class="col-md-12">
                      <div class="form-group">
                        <label>Chief of Police:</label>
                        <input type="text" name="ChiefOfPolice"  class="form-control" value="<?php echo $row['ChiefOfPolice']?>">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Address:</label>
                        <input type="text"  name="Address" class="form-control" value="<?php echo $row['Address']?>">
                      </div>
                    </div>
                     <div class="col-md-12">
                      <div class="form-group">
                        <label>Telephone:</label>
                        <input type="text" name="Telephone" class="form-control" value="<?php echo $row['Telephone']?>">
                      </div>
                    </div>
                      <div class="col-md-12">
                      <div class="form-group">
                        <label>Cellphone:</label>
                        <input type="text"  name="Cellphone"  class="form-control" value="<?php echo $row['Cellphone']?>">
                      </div>
                    </div>
                        <div class="col-md-12">
                      <div class="form-group">
                        <label>Location:</label>
                        <input type="text" name="Location" class="form-control" value="<?php echo $row['Location']?>">
                      </div>
                    </div>
                 
                   
                  </div>
                
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button type="submit" name="submit" class="btn btn-primary btn-round">Update Profile</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>