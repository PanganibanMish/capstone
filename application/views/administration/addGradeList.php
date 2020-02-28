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
                    <form class="form-horizontal" method="post" action="<?php echo site_url('Welcome/addGradeList') ?>">
                        <div class="box-body">
                            <div class="form-group">
                                <div class="col-sm-6">
                                    <label for="grade_name" class="col-sm-1 control-label">Grade Name</label>
                                    <input type="text" class="form-control" name="grade_name" placeholder="Grade Name">
                                </div>
                                <div class="col-sm-6">
                                    <label for="adviser" class="col-sm-1 control-label">Adviser</label>
                                    <select class="form-control" name="user_id">
                                        <option value="">Select Adviser</option>
                                        <option value= "'.$row->lastname.','.$row->lastname.'"></option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <button type="reset" class="btn btn-default">Reset</button>
                            <button type="submit" class="btn btn-sm btn-primary pull-right">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>    
