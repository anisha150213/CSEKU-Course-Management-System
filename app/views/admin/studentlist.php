<div class="content">
    <header>
        <h1 class="cntr">Students</h1>
    </header>
    <br>
    <table id="table" class="table">
        <thead>
            <tr>
                <td>Student ID</td>
                <td>Name</td>
                <td>Mobile</td>
                <td>Email</td>
                <td>Year-Term</td>
                <td>Session</td>
                <td>Results</td>
                <td>Approve Course</td>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($data['table'] as $key => $value){?>
            <tr>
                <td><?php echo $value['student_id']?></td>
                <td><?php echo $value['first_name'].' '.$value['middle_name'].' '.$value['last_name']?></td>
                <td><?php echo $value['mobile']?></td>
                <td><?php echo $value['email']?></td>
                <td><?php echo $value['year'].' year '.$value['term'].' term' ?></td>
                <td><?php echo $value['sessionNumber']?></td>
                <td><a href="<?php echo BASE_URL?>/Result/main/<?php echo $value['user_id']?>" class="btn btn-outline-customs">Show</a></td>
                <td>
                    <?php if($value['have_course'] == '1'){?>
                        <a href="<?php echo BASE_URL?>/approveStudent/main/<?php echo $value['user_id']?>" class="btn btn-outline-customs">Approve</a>
                    <?php }?>
                </td>
            </tr>
        <?php }?>
        </tbody>
    </table>
    <br>
</div>

<script>
    $(document).ready(function () {
        $('#table').DataTable({
            "columnDefs":[
                {
                    "targets":[2,3,6,7],
                    "orderable":false,
                }
            ]
        });
    });
</script>