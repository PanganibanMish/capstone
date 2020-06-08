<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Create Registrar Announcement
        </h1>
        <ol class="breadcrumb">
            <li class="active">Create Registrar Announcement</li>
        </ol>
    </section><hr>
    <section class="content">
         <?php if($this->session->flashdata('message')) { //session na may alert hali sa controller/ ang message declared hali sa controller ?>
            <?php echo $this->session->flashdata('message'); ?></h5>
    <?php } ?>
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <form class="form-horizontal" method="post" action="<?php echo site_url('Welcome/addRegistrarAnnouncement') ?>">
                        <div class="box-body">
                            <div class="form-group">
                                <div class="col-sm-6">
                                    <label for="announcement_name" class="control-label">Announcement Name</label>
                                    <input type="text" class="form-control" name="announcement_name" 
                                            placeholder="Announcement Name">
                                    <input type="hidden" name="id" class="form-control" value='<?php echo $id; ?>'>
                                </div>
                                <div class="col-sm-6">
                                    <label for="announcement_details" class="control-label">Announcement Details</label>
                                    <input type="text" class="form-control" name="announcement_details" placeholder="Announcement Details">
                                </div>
                                 <div class="col-sm-6">
                                    <label for="date" class="control-label">Date</label>
                                    <input type="date" class="form-control" name="date" placeholder="Date">
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
