<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Teacher Announcement
        </h1>
        <ol class="breadcrumb">
            <li class="active">Teacher Announcement</li>
        </ol>
    </section><hr>
     <a href="<?php echo site_url('Welcome/createTeacherAnnouncement') ?>" target='_blank' class='btn btn-sm btn-primary pull-right'>Create Teacher Announcement  </a> 
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Teacher Announcement</h3>
            </div>
            <div class="box-body table-responsive no-padding">
              <table id="example2" class="table table-hover">
                <thead>
                    <tr>
                      <th>ID</th>
                      <th>Student ID</th>
                      <th>Announcement Details</th>
                      <th>Target Date</th>
                      <th>Time Start</th>
                      <th>Time End</th>
                      <th>Remarks</th>
                      <th>Date Created</th>
                      <th>Created By</th>
                      <th>Modified Date</th>
                      <th>Modified By</th>
                      <th>Update</th>
                      <th>Delete</th>
                    </tr>
                </thead>
              <tbody>
                                  <?php
                                    if(!empty($getTeacherAnnouncement))
                                    {
                                       foreach ($getTeacherAnnouncement as $row)
                                    {
                                        echo"<td>".$row->announcement_id."</td>";
                                        echo"<td>".$row->student_id."</td>";
                                        echo"<td>".$row->details."</td>";
                                        echo"<td>".$row->target_date."</td>";
                                        echo"<td>".$row->time_start."</td>";
                                        echo"<td>".$row->time_end."</td>";
                                        echo"<td>".$row->remarks."</td>";
                                        echo"<td>".$row->date_created."</td>";
                                        echo"<td>".$row->created_by."</td>";
                                        echo"<td>".$row->date_modified."</td>";
                                        echo"<td>".$row->modified_by."</td>";

                                        echo "<td><a href='".site_url('Welcome/updateTeacherAnnouncement?id=').$row->announcement_id." ' target='_blank' class='btn btn-sm btn-primary'>UPDATE</a></td>";

                                        echo "<td><a href='".site_url('Welcome/deleteTeacherAnnouncement?id=').$row->announcement_id."' target='_blank' class='btn btn-sm btn-danger'>DELETE</a></td>";
                                echo"</tr>";
                              }
                            }
                               ?>
                </tbody>
              </table>
            </div>
        </div>
    </section>
</div>
 