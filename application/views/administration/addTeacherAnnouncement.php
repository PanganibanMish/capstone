<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Create Announcement
        </h1>
        <ol class="breadcrumb">
            <li class="active">Create Announcement</li>
        </ol>
    </section><hr>
    <section class="content">
         <?php if($this->session->flashdata('message')) { //session na may alert hali sa controller/ ang message declared hali sa controller ?>
            <?php echo $this->session->flashdata('message'); ?></h5>
    <?php } ?>
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <form class="form-horizontal" method="post" action="<?php echo site_url('Welcome/addTeacherAnnouncement') ?>">
                        <div class="box-body">
                            <div class="form-group">
                                <div class="col-sm-6">
                                    <label for="student_id" class="col-sm-1 control-label">Student ID</label>
                                    <select class="form-control" name="student_id">
                                        <option value="">Select Student ID</option>
                                        <?php 
                                            if(!empty($student_profile))
                                            {
                                                foreach($student_profile as $row)
                                                {
                                                    if($row->id == $student_id)
                                                        echo"<option selected value='".$row->id."'>".$row->student_id." </option>";
                                                    else
                                                        echo"<option value='".$row->id."'>".$row->student_id."</option>";
                                                }
                                            }
                                        ?>
                                    </select>
                                </div>
                                 <div class="col-sm-6">
                                    <label for="details" class="col-sm-1 control-label">Details</label>
                                    <input type="text" class="form-control" name="details" placeholder="Details">
                                    <input type="hidden" name="announcement_id" class="form-control" value='<?php echo $announcement_id; ?>'>
                                </div>
                                  <div class="col-sm-6">
                                    <label for="target_date" class="col-sm-1 control-label">Target Date</label>
                                    <input type="date" class="form-control" name="target_date" placeholder="Target Date">
                                </div>
                                 <div class="col-sm-6">
                                    <label for="time_start" class="col-sm-1 control-label">Time Start</label>
                                    <input type="time" class="form-control" name="time_start" placeholder="Time Start">
                                </div>
                                 <div class="col-sm-6">
                                    <label for="time_end" class="col-sm-1 control-label">Time End</label>
                                    <input type="time" class="form-control" name="time_end" placeholder="Time End">
                                </div>
                                  <div class="col-sm-6">
                                    <label for="remarks" class="col-sm-1 control-label">Remarks</label>
                                    <input type="text" class="form-control" name="remarks" placeholder="Remarks">
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <button type="reset" class="btn btn-default">CANCEL</button>
                            <button type="submit" class="btn btn-sm btn-primary pull-right">CREATE</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>    
