<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Create Faculty 
        </h1>
        <ol class="breadcrumb">
            <li class="active">Create Faculty</li>
        </ol>
    </section><hr>
    <section class="content">
         <?php if($this->session->flashdata('message')) { //session na may alert hali sa controller/ ang message declared hali sa controller ?>
            <?php echo $this->session->flashdata('message'); ?></h5>
    <?php } ?>
        <div class="box-header with-border">
             <div class="row">
          <!-- Horizontal Form -->
          <div class="col-md-10 mx-auto">
            <form class="form-horizontal" method="post" action="<?php echo site_url('Welcome/addFaculty') ?>">
            <div class="box-body">
                  <div class="form-group row">
                <div class="col-sm-6">
                  <label for="user_id" class="col-sm-2 control-label">User ID</label>
                    <input type="text" class="form-control first-column" required id="user_id" name="user_id" placeholder="User ID">
                  </div>
                <div class="col-sm-6">
                  <label for="first_name" class="col-sm-2 control-label">First Name</label>
                    <input type="text" class="form-control" name="first_name" placeholder="First Name">
                  </div>
                </div>
                  <div class="form-group row">
                <div class="col-sm-6">
                    <label for="last_name" class="col-sm-2 control-label">Last Name</label>
                    <input type="text" class="form-control" name="last_name" placeholder="Last Name">
                  </div>
                  <div class="col-sm-6">
                    <label for="middle_name" class="col-sm-2 control-label">Middle Name</label>
                    <input type="text" class="form-control" name="middle_name" placeholder="Middle Name">
                  </div>
              </div>
                  <div class="form-group row">
                <div class="col-sm-6">
                  <label for="contact_no" class="col-sm-2 control-label">Contact Number</label>
                    <input type="input" class="form-control"required id="contact_no"  name="contact_no" placeholder="Contact Number">
                  </div>
                <div class="col-sm-6">
                  <label for="birthday" class="col-sm-2 control-label">Birthday</label>
                    <input type="date" class="form-control"  required id="birthday" name="birthday" placeholder="Birthday">
                  </div>
              </div>
                  <div class="form-group row">
                <div class="col-sm-6">
                  <label for="username" class="col-sm-2 control-label">Username</label>
                    <input type="text" class="form-control"  required id="username" name="username" placeholder="Username">
                  </div>
                <div class="col-sm-6">
                  <label for="user_type" class="col-sm-2 control-label">User Type</label>
                    <input type="text" readonly class="form-control" required id="user_type" name="user_type" placeholder="User Type">
                  </div>
              </div>
                  <div class="form-group row">
                <div class="col-sm-6">
                  <label for="email" class="col-sm-2 control-label">Email</label>
                    <input type="text" class="form-control" required id="email" name="email" placeholder="Email">
                  </div>
                  <div class="col-sm-6">
                  <label for="date_created" class="col-sm-2 control-label">Date Created</label>
                    <input type="text" readonly class="form-control" required id="date_created" name="date_created" placeholder="Date Created">
                  </div>
              </div>
                  <div class="form-group row"></div>
                <div class="col-sm-6">
                  <label for="created_by" class="col-sm-2 control-label">Created By</label>
                    <input type="text" readonly class="form-control" required id="created_by" name="created_by" placeholder="Created By">
                     </div>
                  <div class="col-sm-6">
                  <label for="modified_date" class="col-sm-2 control-label">Modified Date</label>
                    <input type="text" readonly class="form-control" required id="modified_date" name="modified_date" placeholder="Modified Date">
                  </div>
              </div>
                  <div class="form-group row">
               <div class="col-sm-6">
                  <label for="modified_by" class="col-sm-2 control-label">Modified By</label>
                    <input type="text" readonly class="form-control" required id="modified_by" name="modified_by" placeholder="Modified By">
                  </div>
                 <div class="col-sm-6">
                  <label for="login_first" class="col-sm-2 control-label">Login Status</label>
                    <input type="text" readonly class="form-control" required id="login_first" name="login_first" placeholder="Login Status">
                </div>
            </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-sm btn-primary pull-right">Create</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
           
        </div>
        
    </section>
</div>    
