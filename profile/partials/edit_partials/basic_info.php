
<?php
        if (isset($_POST['basic_info'])){

            $user_id = $_SESSION['user_id'];

            $fullname = $_POST['name'];
            $email = $_POST['email'];
            $reamil  = $_POST['r_email'];
            $work = $_POST['work'];
            $address = $_POST['address'];

            if (empty($_FILES['image']['name'])){
                $image = $_SESSION['image'];
            }
            else{
                $image = "img/".$user_id.$_FILES['image']['name'];
            }


            $date = $_POST['date'];
            $phone = $_POST['phone'];




                $sql = "update basic_info set fullname = '$fullname',email='$email',phone='$phone',
                address = '$address',image = '$image',work = '$work',bdate='$date' WHERE user_id = '$user_id'";




            if($connect->query($sql)){

                if(!empty($_FILES['image']['name'])) {

                    if (isset($_FILES['image'])) {
                        $user_id = $_SESSION['user_id'];
                        $file_name = $_FILES['image']['name'];
//        $slq = "insert into upload(upload)VALUE ('$file_name')";
//        $insert = $connect->query($slq);
//        if ($insert) {
//            echo 'done';
//        }
                        $errors = array();

                        $file_size = $_FILES['image']['size'];
                        $file_tmp = $_FILES['image']['tmp_name'];
                        $file_type = $_FILES['image']['type'];


                        if ($file_size > 122097152) {
                            $errors[] = 'File size must be excately 2 MB';
                        }

                        if (empty($errors) == true) {
                            move_uploaded_file($file_tmp, "img/" . $user_id . $file_name);
//        echo "Success";
                        } else {
                            print_r($errors);
                        }
                    }
                }
                echo "successfull";
            }else{
                echo "error";
            }

        }


?>

<
    <div class="row">
        <div class="text-center">
            <h3>Basic Info</h3>

        </div>
        <div class="col-md-12">


            <?php
            $user_id = $_SESSION['user_id'];

            $basic_info = "select * from basic_info WHERE user_id ='$user_id' ";

            if ($connect->query($basic_info)->num_rows>0){
                $ans = $connect->query($basic_info);
                $ans = $ans->fetch_assoc();





                ?>
                <form class="" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">

                    <div class="row">
                        <div class="col-md-6">



                            <div class="form-group">

                                <input type="text" name="name" class="form-control" value="<?php echo $ans['fullname']; ?>">


                            </div>
                        </div>
                        <div class="col-md-6">



                            <div class="form-group">


                                <input type="date" name="date" class="form-control" value="<?php echo $ans['bdate'] ?>">


                            </div>
                        </div>

                    </div>

                    <!--                                email-->

                    <div class="row">
                        <div class="col-md-6">



                            <div class="form-group">

                                <input type="email" name="email" class="form-control" value="<?php echo $ans['email'] ?>">


                            </div>
                        </div>
                        <div class="col-md-6">



                            <div class="form-group">


                                <input type="email" name="r_email" class="form-control" value="<?php echo $ans['email'] ?>">


                            </div>
                        </div>

                    </div>
                    <!--                                    works and address-->

                    <div class="row">
                        <div class="col-md-6">



                            <div class="form-group">

                                <input type="text" name="work" class="form-control" value="<?php echo $ans['work'] ?>">


                            </div>
                        </div>
                        <div class="col-md-6">



                            <div class="form-group">


                                <input type="text" name="address" class="form-control" value="<?php echo $ans['address'] ?>">


                            </div>
                        </div>

                    </div>
                    <div class="form-group">

                        <input type="text" name="phone" value="<?php echo $ans['phone'] ?>" class="form-control">



                    </div>

                        <?php
                                $_SESSION['image'] = $ans['image'];


                        ?>


                    <div class="form-group">
                        <input type="file" name="image" >

                    </div>
                    <input  type="submit" class="btn btn-primary btn-block" name="basic_info" value="Update Basic Info" >

                </form>
                <?php


            }?>




        </div>

    </div>

