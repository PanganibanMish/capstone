<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Section List
        </h1>
        <ol class="breadcrumb">
            <li class="active">Section List</li>
        </ol>
    </section><hr>
     <a href="<?php echo site_url('Welcome/createSectionList') ?>" target='_blank' class='btn btn-sm btn-primary pull-right'>Create New Section </a> 
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Section List</h3>
            </div>
            <div class="box-body table-responsive no-padding">
              <table id="example2" class="table table-hover">
                <thead>
                    <tr>
                      <th>Section ID</th>
                      <th>Section Name</th>
                      <th>Grade Level</th>
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
                        if(!empty($getSectionList))
                        {
                            foreach ($getSectionList as $row)
                            {
                                if($row->grade_level== '1')
                                    $grade_level = 'Grade 1';
                                else if($row->grade_level == '2')
                                    $grade_level = 'Grade 2';
                                else if($row->grade_level == '3')
                                    $grade_level = 'Grade 3';
                                else if($row->grade_level == '4')
                                    $grade_level = 'Grade 4';
                                else if($row->grade_level == '5')
                                   $grade_level = 'Grade 5';
                                else if($row->grade_level == '6')
                                   $grade_level = 'Grade 6';
                                else if($row->grade_level == '7')
                                  $grade_level = 'Grade 7';
                                else if($row->grade_level == '8')
                                   $grade_level = 'Grade 8';
                                else if($row->grade_level == '9')
                                    $grade_level = 'Grade 9';
                                else if($row->grade_level == '10')
                                   $grade_level = 'Grade 10';
                                else if($row->grade_level == '11')
                                  $grade_level = 'Grade 11 - GAS';
                                else if($row->grade_level == '12')
                                   $grade_level = 'Grade 11 - HUMMS';
                                else if($row->grade_level == '13')
                                   $grade_level = 'Grade 12 - GAS';
                                else 
                                      $grade_level = 'Grade 12 - HUMMS';
                                        echo"<td>".$row->section_id."</td>";
                                        echo"<td>".$row->section_name."</td>";
                                        echo"<td>".$row->grade_level."</td>";
                                        echo"<td>".$row->date_created."</td>";
                                        echo"<td>".$row->created_by."</td>";
                                        echo"<td>".$row->date_modified."</td>";
                                        echo"<td>".$row->modified_by."</td>";

                                        echo "<td><a href='".site_url('Welcome/updateSectionList?id=').$row->section_id." ' target='_blank' class='btn btn-sm btn-primary'>Update</a></td>";

                                        echo "<td><a href='".site_url('Welcome/deleteSectionList?id=').$row->section_id."' target='_blank' class='btn btn-sm btn-danger'>Delete</a></td>";
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
 