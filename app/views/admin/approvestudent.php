<div class="content">
    <header>
        <h1 class="cntr">Approve Student</h1>
    </header>
    <br>
    <div class="form-group cntr">
        <label class="col-form-label"><?php echo 'Name: '.$data['student'][0]['first_name'].' '.$data['student'][0]['middle_name'].' '.$data['student'][0]['last_name']?></label>
        <br>
        <label class="col-form-label"><?php echo 'Student ID: '.$data['student'][0]['student_id']?></label>
        <br>
        <label class ="col-form-label"><?php echo $data['student'][0]['year'].' year'?></label>
        <br>
        <label class="col-form-label"><?php echo $data['student'][0]['term'].' term'?></label>
        <br>
        <label class="col-form-label"><?php echo 'Session: '.$data['student'][0]['sessionNumber']?></label>
    </div>
    <br>
    <div class = "form-group row ">
        <div class="col-sm-8">
            <h2 class="cntr"><b>Requested Courses</b></h2>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Course No</th>
                    <th>Course Title</th>
                    <th>Credit</th>
                    <th>Type</th>
                    <th>Approve</th>
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
                            <form action="<?php echo BASE_URL?>/approveStudent/updateCB" method="post">
                                <input type="hidden" name="id" value="<?php echo $value['id']?>">
                                <input type="hidden" name="user_id" value="<?php echo $data['student'][0]['user_id']?>">
                                <input type="checkbox" name="cb" <?php if($value['is_approve'] == '1'){echo 'checked';}?> onchange="check(this)">
                            </form>
                        </td>
                    </tr>
                <?php }?>
                </tbody>
            </table>
        </div>
        <?php if(isset($data['retake'])){?>
        <div class="col-sm-4">
            <h2 class="cntr"><b>Retake list</b></h2>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Course No</th>
                    <th>Course Title</th>
                    <th>Credit</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($data['retake'] as $key => $value){?>
                <tr>
                    <td><?php echo $value['courseNumber']?></td>
                    <td><?php echo $value['courseTitle']?></td>
                    <td><?php echo $value['credit']?></td>
                </tr>
                <?php }?>
                </tbody>
            </table>
        </div>
        <?php }?>
    </div>
</div>

<script>
    function check(cb) {
        var form = cb.parentNode;
        form.submit();
    }
</script>