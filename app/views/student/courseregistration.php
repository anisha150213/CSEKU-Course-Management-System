<div class="content">
	<header>
		<h1 class="cntr">Register Course</h1>
		<br>
	</header>
    <?php if($data['isOpen'][0]['is_open'] == '1'){?>
        <form id="ddl" method="post" action="<?php echo BASE_URL?>/CourseRegistration/courseRegistration">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label class="form-control-label">Current Year-Term</label>
                <select class="form-control" name="ddlYearTerm" disabled="disabled">
                    <?php
                    foreach ($data[0] as $key => $value){
                        ?>
                        <option value="<?php echo $value['id']?>" <?php if($value['id'] == $data['term']){echo 'selected = "selected"';}?>>
                            <?php echo $value['year']." year ".$value['term']." term"?>
                        </option>
                        <?php
                    }
                    ?>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label class="form-control-label">Syllabus</label>
                <select class="form-control" name="ddlSyllabus" onchange="select();">
                    <?php
                    foreach ($data[1] as $key => $value){
                        ?>
                        <option value="<?php echo $value['id']?>" <?php if($value['id'] == $data['syllabusName']){echo 'selected = "selected"';}?>>
                            <?php echo $value['syllabus_Name']?>
                        </option>
                        <?php
                    }
                    ?>
                </select>
            </div>
        </div>
    </form>

        <?php if(isset($data['retake'])){?>
        <div class="row">
            <div class="col-md-12">
                <h2 class="cntr"><b>Retake List</b></h2>
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
                            <td><?php echo $value['courseNumber'] ?></td>
                            <td><?php echo $value['courseTitle'] ?></td>
                            <td><?php echo $value['credit'] ?></td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
            <br><br>
        </div>
    <?php } ?>
        <h2 class="cntr"><b>Subject List</b></h2>
        <form method="post", action="<?php echo BASE_URL?>/CourseRegistration/courseValidation">
        <input type="text" name="yearTermId" value="<?php echo $data['term']?>" hidden="true">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Course Title</th>
                <th>Type</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $c = count($data[2]);
            if($c>15){
                $c = 15;
            }
            if(isset($data['retake'])){
                $data['2'] = array_merge($data['retake'],$data['2']);
            }
            for ($i = 0; $i < $c; $i++) {
                ?>
                <tr>
                    <td>
                        <select class="form-control" width="100%" name="<?php echo "courseTitle".$i?>">
                            <option value="0">select</option>
                            <?php
                            foreach ($data['2'] as $key => $value){
                                ?>
                                <option value="<?php echo $value['id']?>"><?php echo $value['courseNumber']." ".$value['courseTitle']?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </td>
                    <td>
                        <select class="form-control" name="<?php echo "CourseType".$i?>">
                            <option value="1">Fresh</option>
                            <option value="2">Retake</option>
                            <option value="3">Re-retake</option>
                        </select>
                    </td>
                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
        <div class="form-group" >
            <center><button type="submit" class="cnt btn btn-outline-customs">Register</button></center>
        </div>
    </form>
    <?php }else{?>
        <span class="text-center text-danger">Course Registration is Closed Now Come back Later when Its open.</span>
    <?php }?>


</div>

<script>
    function select() {
        document.getElementById('ddl').submit();
    }
</script>

