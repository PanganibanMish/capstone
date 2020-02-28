<?php 

    $grade_id = "";
    $grade_name = "";
    $adviser = "";
  
        if(!empty($getGradeList))
        {
            foreach ($getGradeList as $row)
            {
                $grade_id  = $row->grade_id;
                $grade_name = $row->grade_name;
                $adviser = $row->adviser;
            }
        }
?>
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Create Grade Level
        </h1>
        <ol class="breadcrumb">
            <li class="active">Create Grade Level</li>
        </ol>
    </section><hr>
    <section class="content">
         <?php if($this->session->flashdata('message')) { //session na may alert hali sa controller/ ang message declared hali sa controller ?>
            <?php echo $this->session->flashdata('message'); ?></h5>
    <?php } ?>
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <form class="form-horizontal" method="post" action="<?php echo site_url('Welcome/savechangesGradeList'); ?>">
                        <div class="box-body">
                            <div class="form-group">
                                <div class="col-sm-6">
                                    <label for="grade_name" class="col-sm-1 control-label">Grade Name</label>
                                    <input type="text" class="form-control" value='<?php echo $grade_name; ?>'required id="grade_name" name="grade_name" placeholder="Grade Name">
                                    <input type="hidden" name="grade_id" class="form-control" value='<?php echo $grade_id; ?>'>
                                </div>
                                <div class="col-sm-6">
                                    <label for="adviser" class="col-sm-1 control-label">Adviser</label>
                                    <input type="text" class="form-control" value='<?php echo $adviser; ?>'required id="adviser" name="adviser" placeholder="Adviser">
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-default">Cancel</button>
                            <button type="submit" class="btn btn-sm btn-primary pull-right">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>    
