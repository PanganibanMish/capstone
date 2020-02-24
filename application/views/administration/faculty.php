<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Faculty
        </h1>
        <ol class="breadcrumb">
            <li class="active">Faculty</li>
        </ol>
    </section><hr>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">User List</h3>
            </div>
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                    <tr>
                      <th>User ID</th>
                      <th>Full Name</th>
                       <th>Contact Number</th>
                      <th>Birthday</th>
                      <th>Username</th>
                      <th>User Type</th>
                      <th>Update</th>
                      <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        if(!empty($getUser))
                        {
                            foreach ($getUser as $row)
                            {
                                echo "<tr>";
                                    echo"<td>".$row->user_id."</td>";
                                    echo "<td>".$row->fullname."</td>";
                                    echo"<td>".$row->contact_no."</td>";
                                    echo"<td>".$row->birthday."</td>";
                                    echo"<td>".$row->username."</td>";
                                    echo"<td>".$row->user_type."</td>";
                                    echo "<td><a href='".site_url('Welcome/UpdateFaculty?id=').$row->user_id." ' target='_blank' class='btn btn-sm btn-primary'>Update</a></td>";

                                    echo "<td><a href='".site_url('Welcome/deleteFaculty?id=').$row->user_id."' target='_blank' class='btn btn-sm btn-danger'>Delete</a></td>";
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
 