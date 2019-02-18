<div class="content">
    <header>
        <h1 class="cntr">Result</h1>
    </header>
    <br>
    <form id="ddl" method="POST" action="<?php echo BASE_URL?>/InsertResult/main/">
        <div class="form-group row cntr">
            <div class="col-md-3"></div>
            <div class="col-sm-6">
                <label class="col-form-label">Year - Term</label>
                <div class="">
                    <select class="form-control" id="ddlTerm" name="ddlYearTerm" onchange="select();">
                        <?php
                        foreach ($data[0] as $key => $value){
                            ?>
                            <option value="<?php echo $value['id']?>" <?php
                            if (array_key_exists('term', $data)) {
                                if($value['id'] == $data['term']){
                                    echo 'selected = "selected"';
                                }
                            }
                            ?>>
                                <?php echo $value['year']." year ".$value['term']." term" ?>
                            </option>
                            <?php
                        }
                        ?>
                    </select>
                </div>
            </div>
        </div>
    </form>
    <br>
    <?php if (!empty($data['course'])){?>
        <div class = "form-group row ">
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Course No</th>
                    <th>Course Title</th>
                    <th>Credit</th>
                    <th>Type</th>
                    <th>Grade</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($data['course'] as $key => $value){?>
                    <tr>
                        <td><?php echo $value['courseNumber']?></td>
                        <td><?php echo $value['courseTitle']?></td>
                        <td><?php echo $value['credit']?></td>
                        <td><?php echo $value['type']?></td>
                        <td>
                            <form action="<?php echo BASE_URL?>/InsertResult/result" method="post">
                                <input type="hidden" name="id" value="<?php echo $value['id']?>">
                                <input type="hidden" name="term" value="<?php echo $data['term']?>">
                                <input type="hidden" name="course_id" value="<?php echo $value['course_id']?>">
                                <select name="grade" onchange="getGrade(this);">
                                    <option value="0" <?php if($value['result'] == '0'){ echo 'selected';}?>>Select</option>
                                    <option value="4.00" <?php if($value['result'] == '4.00'){ echo 'selected';}?>>A+</option>
                                    <option value="3.75" <?php if($value['result'] == '3.75'){ echo 'selected';}?>>A</option>
                                    <option value="3.50" <?php if($value['result'] == '3.50'){ echo 'selected';}?>>A-</option>
                                    <option value="3.25" <?php if($value['result'] == '3.25'){ echo 'selected';}?>>B+</option>
                                    <option value="3.00" <?php if($value['result'] == '3.00'){ echo 'selected';}?>>B</option>
                                    <option value="2.75" <?php if($value['result'] == '2.75'){ echo 'selected';}?>>B-</option>
                                    <option value="2.50" <?php if($value['result'] == '2.50'){ echo 'selected';}?>>C+</option>
                                    <option value="2.25" <?php if($value['result'] == '2.25'){ echo 'selected';}?>>C</option>
                                    <option value="2.00" <?php if($value['result'] == '2.00'){ echo 'selected';}?>>D</option>
                                    <option value="-1" <?php if($value['result'] == '-1'){ echo 'selected';}?>>F</option>
                                </select>
                            </form>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
            <br>
            <div class="form-group row">
                <div class="col-md-4">
                    <label class="form-control-label col-md-6">Taken Credit</label>
                    <label class="form-control col-md-6"><?php echo $data['total_credit_taken'][0]['SUM(course.credit)']?></label>
                </div>
                <div class="col-md-4">
                    <label class="form-control-label col-md-6">Completed credit</label>
                    <label class="form-control col-md-6"><?php echo $data['credit_completed'][0]['SUM(course.credit)']?></label>
                </div>
                <div class="col-md-4">
                    <label class="form-control-label col-md-6">TGPA</label>
                    <label class="form-control col-md-6"><?php echo $data['result']?></label>
                </div>
            </div>
        </div>
    </div>
    <?php }else{?>
        <span class="text-danger">NO approved Course found</span>
    <?php }?>
</div>

<script>
    function select() {
        var ddl = document.getElementById('ddl');
        var action = ddl.getAttribute('action');
        var newAction = action + document.getElementById('ddlTerm').value;
        ddl.setAttribute('action', newAction);
        ddl.submit();
    }

    function getGrade(asd) {
        var parent = asd.parentNode;
        parent.submit();
    }
</script>
