<?php 

    $user_id = "";
    $fullname = "";
    $contact_no  = "";
    $birthday  = "";
    $username = "";
    $user_type = "";
  
        if(!empty($getUser))
        {
            foreach ($getUser as $row)
            {
                $user_id  = $row->user_id;
                $first_name = $row->first_name;
                $contact_no = $row->contact_no;
                $birthday = date_format(date_create($row->birthday), 'Y-m-d');
                $username = $row->username;
                $user_type = $row->user_type;

            }
        }
?>

<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Update Faculty - Lubot mo
        </h1>
        <ol class="breadcrumb">
            <li class="active">Update Faculty</li>
        </ol>
    </section><hr>
    <section class="content">
         <?php if($this->session->flashdata('message')) { //session na may alert hali sa controller/ ang message declared hali sa controller ?>
            <?php echo $this->session->flashdata('message'); ?></h5>
    <?php } ?>
        <div class="row">
             <div class="col-md-6 col-md-offset-3">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <form class="form-horizontal" method="post" action="<?php echo site_url('Welcome/savechangesFaculty'); ?>">
              <div class="box-body">
                <div class="form-group">
                  <label for="user_id" class="col-sm-2 control-label">User ID</label>
                  <div class="col-sm-10">
                    <input type="text" readonly class="form-control" value='<?php echo $user_id; ?>'required id="user_id" name="user_id" placeholder="User ID">
                  </div>
                </div>
                <div class="form-group">
                  <label for="fullname" class="col-sm-2 control-label">First Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" value='<?php echo $fullname; ?>' name="fullname" placeholder="Fullname">
        
                  </div>
                </div>
                <div class="form-group">
                  <label for="contact_no" class="col-sm-2 control-label">Contact Number</label>
                  <div class="col-sm-10">
                    <input type="input" class="form-control" value='<?php echo $contact_no; ?>'required id="contact_no"  name="contact_no" placeholder="Contact Number">
                  </div>
                </div>
                <div class="form-group">
                  <label for="birthday" class="col-sm-2 control-label">Birthday</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" value='<?php echo $birthday; ?>' required id="birthday" name="birthday" placeholder="Birthday">
                  </div>
                </div>
                <div class="form-group">
                  <label for="username" class="col-sm-2 control-label">Username</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" value='<?php echo $username; ?>' required id="username" name="username" placeholder="Username">
                  </div>
                </div>
                <div class="form-group">
                  <label for="user_type" class="col-sm-2 control-label">User Type</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" value='<?php echo $user_type; ?>' required id="user_type" name="user_type" placeholder="User Type">
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-sm btn-primary pull-right">Update</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
           
        </div>
        
    </section>
</div>    
