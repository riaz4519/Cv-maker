<?php

    if (isset($_POST['change'])){

            $user_id = $_SESSION['user_id'];
        $old_pass = trim($_POST['old_pass']);
        $new_pass = trim($_POST['new_pass']);
        $re_pass = trim($_POST['re_pass']);

        $sql_old_pass_check = "select password from users WHERE id = '$user_id'";



        if ($connect->query($sql_old_pass_check)->num_rows> 0){
            $get_old = $connect->query($sql_old_pass_check);

            $get_old_1 = $get_old->fetch_assoc();
            if($get_old_1['password'] == $old_pass){


                if ($new_pass == $re_pass){

                    $sql_update_pass = "update users set password = '$new_pass' WHERE id = '$user_id'";

                    if($connect->query($sql_update_pass)){
                        ?>
                        <h1 class="well alert-success text-center">Password Updated</h1>
                        <?php
                    }

                }
                else{
                    ?>
                    <h1 class="well alert-danger text-center">Password Doesn't match</h1>

                    <?php

                }


            }
            else{
                ?>
                <h1 class="well alert-danger text-center">Incorrect Password</h1>
<?php
            }
        }
        else{
            echo "error";
        }
    }



?>

<div class="row">
    <h1 class="text-center">Change Password</h1>

    <div class="col-md-10 col-md-offset-1">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <div class="form-group">
                <input type="password" placeholder="enter you old password" name="old_pass" class="form-control">

            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                        <input type="password" placeholder="enter new Password" name="new_pass"  class="form-control">
                    </div>
                    <div class="col-md-6">
                        <input type="password" placeholder="Re-type Password" name="re_pass"  class="form-control">
                    </div>

                </div>

            </div>
            <input type="submit" class="btn btn-block btn-primary" name="change">

        </form>

    </div>

</div>