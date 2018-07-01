<?php

if (isset($_GET['idd'])){
    $id = $_GET['idd'];


    $sql_d = "delete from award WHERE id = '$id'";

    if($connect->query($sql_d)){
        echo 'deleted';
    }
}
?>

<!--update award-->


<?php

if (isset($_POST['award'])){
    $naward = trim($_POST['naward']);
    $ncomp = trim($_POST['ncomp']);
    $year = trim($_POST['year']);

    $id = $_SESSION['id'];

    $sql_update = "update award set naward = '$naward',ncomp = '$ncomp',year = '$year' WHERE id = '$id'";

    if($connect->query($sql_update)){
        echo "success";
    }
}

?>

<table class="table ">

    <thead>
    <tr>
        <th>Name Of Award</th>
        <th>Name Of the Company Or ins.</th>

        <th>Year</th>
        <th></th>
        <th></th>

    </tr>
    </thead>

    <tbody>
    <!--    -->

    <?php

    $user_id = $_SESSION['user_id'];

    $sql = "select * from award where user_id = '$user_id'";

    if($connect->query($sql)){
        $ans = $connect->query($sql);


        while ($ans_1 = $ans->fetch_assoc()){



            ?>


            <tr>

                <td><?php echo $ans_1['naward']; ?></td>
                <td><?php echo $ans_1['ncomp']; ?></td>

                <td><a  href="award_edit.php?id=<?php echo $ans_1['id'];?>" class="btn btn-primary">Edit</a></td>

                <td><a  href="award_edit.php?idd=<?php echo $ans_1['id'];?>" class="btn btn-primary">Delete</a></td>

            </tr>
            <?php
        }
    }


    ?>


    </tbody>

</table>
<?php
if(isset($_GET['id'])){
$id = $_GET['id'];
$_SESSION['id'] = $id;


$get_work  = "select * from award WHERE id = '$id'";

$get_award_1 = $connect->query($get_work);
$get_award_2 = $get_award_1->fetch_assoc();
?>
    <div class="row">

        <div class="well text-center ">
            <h1 >Awards</h1>

        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading text-center">
                        <p>Edit Your Awards</p>

                    </div>
                    <form class="" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" >
                        <div class="panel-body">
                            <div class="form-group">
                                <input type="text" class="form-control" name="naward" value="<?php echo $get_award_2['naward']; ?>" required>

                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" class="form-control"  name="ncomp" value="<?php echo $get_award_2['ncomp']; ?>"  required>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control"  name="year" value="<?php echo $get_award_2['year']; ?>"  required>
                                    </div>

                                </div>


                            </div>


                        </div>

                        <div class="panel-footer">
                            <input type="submit" name="award" value="Submit Award" class="form-control btn btn-block btn-primary">

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

<?php  }


?>
