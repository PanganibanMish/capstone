<?php 

    $section_id = "";
    $section_name = "";
    $grade_level  = "";
  
        if(!empty($getSectionList))
        {
            foreach ($getSectionList as $row)
            {
                $section_id = $row->section_id;
                $section_name = $row->section_name;
                $grade_level  = $row->grade_level;
            }
        }
?>

<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Update Section
        </h1>
        <ol class="breadcrumb">
            <li class="active">Update Section</li>
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
            <form class="form-horizontal" method="post" action="<?php echo site_url('Welcome/savechangesSection'); ?>">
            <div class="box-body">
                <div class="form-group row">
                <div class="col-sm-6">
                    <label for="section_name" class="col-sm-2 control-label">Section Name</label>
                    <input type="text" class="form-control" value='<?php echo $section_name; ?>' name="section_name" placeholder="Section Name">
                  </div>
                  <div class="col-sm-6">
                    <label for="grade_level" class="col-sm-2 control-label">Grade Level</label>
                    <input type="text" class="form-control" value='<?php echo $grade_level; ?>' name="grade_level" placeholder="Grade Level">
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
