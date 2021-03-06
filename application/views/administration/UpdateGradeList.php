<?php 

    $grade_id = "";
    $grade_level = "";
    $adviser = "";
  
        if(!empty($getGradeList))
        {
            foreach ($getGradeList as $row)
            {
                $grade_id  = $row->grade_id;
                $grade_level = $row->grade_level;
                $adviser = $row->adviser;
            }
        }
?>
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Update Grade Level
        </h1>
        <ol class="breadcrumb">
            <li class="active">Update Grade Level</li>
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
                                    <label class="control-label">Grade Level</label>
                                    <input type="text" class="form-control" value='<?php echo $grade_level; ?>'required id="grade_level" name="grade_level" placeholder="Grade Level">
                                    <input type="hidden" name="grade_id" class="form-control" value='<?php echo $grade_id; ?>'>
                                </div>
                                <div class="col-sm-6">
                                    <label for="adviser" class="col-sm-1 control-label">Adviser</label>
                                    <select class="form-control" name="adviser">
                                        <option value="">Select Adviser</option>
                                        <?php 
                                            if(!empty($userlist))
                                            {
                                                foreach($userlist as $row)
                                                {
                                                    if($row->user_id == $adviser)
                                                        echo"<option selected value='".$row->user_id."'>".$row->first_name." ".$row->last_name."</option>";
                                                    else
                                                        echo"<option value='".$row->user_id."'>".$row->first_name." ".$row->last_name."</option>";
                                                }
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-default">CANCEL</button>
                            <button type="submit" class="btn btn-sm btn-primary pull-right">UPDATE</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>    
