<div class="content">
	<header>
		<h1 class="cntr">My Courses</h1>
		<br>
	</header>
    <form id="ddl" method="post" action="<?php echo BASE_URL?>/MyCourses/myCourses">
        <div class="form-row">
            <div class="col-md-2">
                <label class="form-control-label">Year-Term</label>
            </div>
            <div class="form-group col-md-3">
                <select class="form-control" name="ddlYearTerm" id="ddl_term" onchange="select();">
                    <?php
                    foreach ($data[0] as $key => $value){
                        ?>
                        <!-- <?php if($value['id'] == $data['term']){echo 'selected = "selected"';}?> -->
                        <option value="<?php echo $value['id']?>" <?php if($value['id'] == $data['term']){echo 'selected = "selected"';}?>>
                            <?php echo $value['year']." year ".$value['term']." term"?>
                        </option>
                        <?php
                    }
                    ?>
                </select>
            </div>
        </div>
    </form>
	<h2 class="cntr"><b>Subject List</b></h2>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Course No</th>
            <th>Course Title</th>
            <th>Credit</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
            <?php
            foreach ($data[1] as $key => $value){
                ?>
                <tr>
                    <td><?php echo $value['courseNumber']?></td>
                    <td><?php echo $value['courseTitle']?></td>
                    <td><?php echo $value['credit']?></td>
                    <td>
                        <?php
                        if ($value['is_approve'] == 0) {
                            echo "Not approved";
                        } elseif ($value['is_approve'] == 1) {
                            echo "Approved";
                        }
                        ?>
                    </td>
                    <td>
                        <?php if($value['is_approve'] == 0){?>
                            <form action="<?php echo BASE_URL?>/myCourses/delete" method="post">
                                <input type="hidden" name="id" value="<?php echo $value['id']?>">
                                <input type="hidden" name="term" id="delete_term" value="">
                                <input type="button" name="delete" value="Delete" onclick="delete_course(this);" class="btn btn-outline-danger">
                            </form>
                        <?php }?>
                    </td>
                </tr>
                <?php
            }
            ?>
            <tr>
                <td></td>
                <td>Total Credit</td>
                <td><?php echo $data[2][0]['SUM(course.credit)'];?></td>
                <td></td>
            </tr>
        </tbody>
    </table>
</div>

<script>
    function select() {
        var ddl = document.getElementById('ddl')
        ddl.submit();
    }

    function delete_course(asd) {
        var parent_form = asd.parentNode;
        var term = parent_form.childNodes[3];
        var ddl_value = document.getElementById('ddl_term').value;
        term.setAttribute('value', ddl_value);
        parent_form.submit();
    }
</script>
