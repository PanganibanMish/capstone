<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Create Section
        </h1>
        <ol class="breadcrumb">
            <li class="active">Create Section</li>
        </ol>
    </section><hr>
    <section class="content">
         <?php if($this->session->flashdata('message')) { //session na may alert hali sa controller/ ang message declared hali sa controller ?>
            <?php echo $this->session->flashdata('message'); ?></h5>
    <?php } ?>
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <form class="form-horizontal" method="post" action="<?php echo site_url('Welcome/addSection') ?>">
                        <div class="box-body">
                            <div class="form-group">
                                <div class="col-sm-6">
                                    <label for="section_name" class="col-sm-1 control-label">Section Name</label>
                                    <input type="text" class="form-control" name="section_name" placeholder="Section Name">
                                </div>
                                <div class="col-sm-6">
                                    <label for="grade_level" class="col-sm-1 control-label">Grade Level</label>
                                    <select class="form-control" name="grade_level">
                                        <option value="">Select grade level</option>
                                        <option value="1">Grade 1</option>
                                        <option value="2">Grade 2</option>
                                        <option value="3">Grade 3</option>
                                        <option value="4">Grade 4</option>
                                        <option value="5">Grade 5</option>
                                        <option value="6">Grade 6</option>
                                        <option value="7">Grade 7</option>
                                        <option value="8">Grade 8</option>
                                        <option value="9">Grade 9</option>
                                        <option value="10">Grade 10</option>
                                        <option value="11">Grade 11 - GAS</option>
                                        <option value="12">Grade 11 - HUMMS</option>
                                        <option value="13">Grade 12 - GAS</option>
                                        <option value="14">Grade 12 - HUMMS</option>
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
