<div class="container-fluid">
    
    <?php if (isset($result) && $result): ?>
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="header">
                    <h3>Edit Profile</h3>
                </div>
                <div class="content">
                    <form method="post" action="<?php echo str_replace('index.php/', '', $_SERVER['PHP_SELF']); ?>" accept-charset="utf-8">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label>Username</label>
                                <input type="text" class="form-control" name="username" placeholder="Username" value="<?php echo $result->username ?>">
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" placeholder="Email" value="<?php echo $result->email ?>" disabled>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label>First Name</label>
                                <input type="text" class="form-control" name="fname" placeholder="Company" value="<?php echo $result->first_name ?>">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Last Name</label>
                                <input type="text" class="form-control" name="lname" placeholder="Last Name" value="<?php echo $result->last_name ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group">
                                
                                <label>Company</label>
                                <input type="text" class="form-control" name="company" placeholder="Company" value="<?php echo $result->company ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group">
                                
                                <label>Phone</label>
                                <input type="text" class="form-control" name="phone" placeholder="Company" value="<?php echo $result->phone ?>">
                                
                            </div>
                        </div>
                        <button type="submit" name="submitBtn" value="submitBtn" class="btn btn-info btn-fill pull-right">Update Profile</button>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-user">
                <div class="image">
                    <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&amp;fm=jpg&amp;h=300&amp;q=75&amp;w=400" alt="...">
                </div>
                <div class="content">
                    <div class="author">
                        <a href="javascript:void(0)">
                            <img class="avatar border-gray" src="<?php echo ASSETS_URL ?>images/face-1.jpg" alt="...">
                            <h4 class="title"><?php echo "{$result->first_name} {$result->last_name}"?><br>
                            <small><?php echo $result->email?></small>
                            </h4>
                        </a>
                    </div>
                    <p class="user-description text-center"> <?php echo (!empty($result->email)?'<strong>Company: </strong>'.$result->company:'') ?>
                    </p>
                </div>
                
            </div>
        </div>
    </div>
    <?php else: ?>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="header text-center">
            Edit Profile
          </div>
        </div>

        <div class="col-md-12 text-center">
          <div class="row">
            <div class="clearfix">
              <br><br><br>
            </div>
            <p>Looks like you are lost.</p>
            <p>Let's get back to  <a href="<?php echo site_url('app/dashboard') ?>">HOME</a></p>
          </div>
        </div>
      </div>
    </div>
  <?php endif ?>
</div>