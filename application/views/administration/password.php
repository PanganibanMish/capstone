<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Change Password
        </h1>
        <ol class="breadcrumb">
            <li class="active">Change Password</li>
        </ol>
    </section><hr>
    <section class="content">
    <?php if($this->session->flashdata('message')) { //session na may alert hali sa controller/ ang message declared hali sa controller ?>
        <div class="alert alert-info alert-dismissible text-center">
            <h5><?php echo $this->session->flashdata('message'); ?></h5>
        </div>
    <?php } ?>
      <div class="row">
        <div class="col-md-6">
          <div class="box box-primary">
            <form method="post" action="<?php echo site_url('Welcome/changepasswords'); ?>"class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <div class="col-sm-6">
                      <label class="control-label">New Password: </label>
                      <input type="password" required name="new_password" class="form-control" placeholder="New Password">
                    </div>
                  </div> 
                   <div class="col-sm-6">
                      <label class="control-label">Confirm Password: </label>
                      <input type="password" required name="confirm_password" class="form-control" placeholder="Confirm Password">
                    </div>
                  </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-info pull-right">Change Password</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
  </div>
</div>
  </section>
</div>

   