<?php 

    $subject_id = "";
    $subject_code = "";
    $subject_name  = "";
  
        if(!empty($getSubjectList))
        {
            foreach ($getSubjectList as $row)
            {
                $subject_id = $row->subject_id;
                $subject_code = $row->subject_code;
                $subject_name  = $row->subject_name;
            }
        }
?>

<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Update Subject
        </h1>
        <ol class="breadcrumb">
            <li class="active">Update Subject</li>
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
            <form class="form-horizontal" method="post" action="<?php echo site_url('Welcome/savechangesSubject'); ?>">
            <div class="box-body">
                <div class="form-group row">
                <div class="col-sm-6">
                    <label for="subject_code" class="col-sm-2 control-label">Subject Code</label>
                    <input type="text" class="form-control" value='<?php echo $subject_code; ?>' name="subject_code" placeholder="Subject Code">
                    <input type="hidden" name="subject_id" class="form-control" value='<?php echo $subject_id; ?>'>
                  </div>
                  <div class="col-sm-6">
                    <label for="subject_name" class="col-sm-2 control-label">Subject Name</label>
                    <input type="text" class="form-control" value='<?php echo $subject_name; ?>' name="subject_name" placeholder="Subject Name">
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
