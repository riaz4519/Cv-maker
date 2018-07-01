<?php

    if (isset($_GET['idd'])){
        $id = $_GET['idd'];


        $sql_d = "delete from education WHERE id = '$id'";

        if($connect->query($sql_d)){
            echo 'deleted';
        }
    }



?>


<table class="table ">

    <thead>
    <tr>
        <th>Category</th>
        <th>Institution Name</th>
        <th>Year</th>

        <th></th>
        <th></th>

    </tr>
    </thead>

    <tbody>
<!--    -->

<?php

    $user_id = $_SESSION['user_id'];

    $sql = "select * from education where user_id = '$user_id'";

    if($connect->query($sql)){
        $ans = $connect->query($sql);
        ;

        while ($ans_1 = $ans->fetch_assoc()){



        ?>


        <tr>

            <td><?php echo $ans_1['category']; ?></td>
            <td><?php echo $ans_1['iname']; ?></td>
            <td><?php echo $ans_1['year']; ?></td>
            <td><a  href="edit_education.php?id=<?php echo $ans_1['id'];?>" class="btn btn-primary">Edit</a></td>

            <td><a  href="edit_education.php?idd=<?php echo $ans_1['id'];?>" class="btn btn-primary">Delete</a></td>

        </tr>
<?php
        }
    }


?>


    </tbody>

</table>
<?php

if (isset($_POST['education'])){
    $institute = trim($_POST['iname']);
    $category = trim($_POST['category']);
    $year = trim($_POST['year']);
    $result = trim($_POST['result']);
    $id = $_SESSION['id'];

    $sql_update = "update education set category = '$category',iname='$institute',year = '$year',result = '$result' WHERE id ='$id' ";

    if($connect->query($sql_update)){
        echo "success";
    }
    else{
        echo "error";
    }

}


?>
<?php

if (isset($_GET['id'])){
    $id = $_GET['id'];
    $_SESSION['id'] = $id;

    $sql_ed = "select * from education WHERE id = '$id'";

        $edu = $connect->query($sql_ed);

        $edu_1 = $edu->fetch_assoc();


    ?>

    <?php



    ?>

    <div class="row ">
        <div class="well text-center ">
            <h1 >Education</h1>

        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading text-center">
                        <p>School</p>

                    </div>
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                        <div class="panel-body">
                            <div class="form-group">
                                <select name="category" class="form-control">
                                    <option value="high school" <?php if ($edu_1['category']=="high school" ){
                                        echo "selected";
                                    } ?>>HIGH SCHOOL</option>
                                    <option value="school" <?php if ($edu_1['category']=="school" ){
                                        echo "selected";
                                    } ?>>SCHOOL</option>
                                    <option value="college" <?php if ($edu_1['category']=="college" ){
                                        echo "selected";
                                    } ?>>COLLEGE</option>
                                    <option value="university" <?php if ($edu_1['category']=="university" ){
                                        echo "selected";
                                    } ?>>UNIVERSITY</option>

                                </select>


                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control"  name="iname" required value="<?php echo $edu_1['iname']?>">

                            </div>
                            <div class="form-group">
                                <div class="row">

                                    <div class=" col-md-6">
                                        <input type="text" name="year" class="form-control col-md-6"  required value="<?php echo $edu_1['year']?>">
                                    </div>
                                    <div class=" col-md-6">
                                        <input type="text" name="result" class="form-control col-md-6" placeholder="Enter Your Result" required value="<?php echo $edu_1['result']?>">
                                    </div>



                                </div>

                            </div>




                        </div>
                        <div class="panel-footer">
                            <input type="submit" class="btn btn-primary btn-block" value="SUBMIT" name="education">

                        </div>

                    </form>

                </div>

            </div>


        </div>

    </div>


    <?php


}



?>