<!--                    this is for selecting that he/she have doen basic info or no-->
<?php

$basic = "select user_id from basic_info  where user_id = '$user_id'";

if(!$connect->query($basic)->num_rows >0){



    ?>
    <?php



    if (isset($_POST['basic_info'])){

        $fullname = $_POST['name'];
        $email = $_POST['email'];
        $reamil  = $_POST['r_email'];
        $work = $_POST['work'];
        $address = $_POST['address'];
        $image = "img/".$user_id.$_FILES['image']['name'];
        $date = $_POST['date'];
        $phone = $_POST['phone'];
        $about = trim($_POST['about']);

        $sql = "insert into basic_info(user_id,fullname,email,phone,address,image,work,bdate,about)VALUES ('$user_id','$fullname','$email','$phone','$address','$image','$work','$date','$about')";


        if($connect->query($sql)){

            if(isset($_FILES['image'])) {
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
                    move_uploaded_file($file_tmp, "img/" . $user_id.$file_name);
//        echo "Success";
                } else {
                    print_r($errors);
                }
            }
        }else{
            echo "error";
        }




    }


    ?>
    <div class="row">
        <div class="text-center">
            <h3>Basic Info</h3>

        </div>
        <div class="col-md-10">
            <form class="" action="" method="POST" enctype="multipart/form-data">

                <div class="row">
                    <div class="col-md-6">



                        <div class="form-group">

                            <input type="text" name="name" class="form-control" placeholder="Inser Your Full Name" required>


                        </div>
                    </div>
                    <div class="col-md-6">



                        <div class="form-group">


                            <input type="date" name="date" class="form-control" placeholder="date of birth" required>


                        </div>
                    </div>

                </div>

                <!--                                email-->

                <div class="row">
                    <div class="col-md-6">



                        <div class="form-group">

                            <input type="email" name="email" class="form-control" placeholder="Insert Your Email" required>


                        </div>
                    </div>
                    <div class="col-md-6">



                        <div class="form-group">


                            <input type="email" name="r_email" class="form-control" placeholder="Re-type Emal" required>


                        </div>
                    </div>

                </div>
                <!--                                    works and address-->

                <div class="row">
                    <div class="col-md-6">



                        <div class="form-group">

                            <input type="text" name="work" class="form-control" placeholder="your Work" required>


                        </div>
                    </div>
                    <div class="col-md-6">



                        <div class="form-group">


                            <input type="text" name="address" class="form-control" placeholder="insert Your Address" required>


                        </div>
                    </div>

                </div>
                <div class="form-group">

                    <input type="text" name="phone" placeholder="please enter your phone number" class="form-control" required>



                </div>
                <div class="form-group">

                    <textarea class="form-control" name="about" rows="5" placeholder="write something about your self"></textarea>



                </div>

                <div class="form-group">
                    <input type="file" name="image">

                </div>
                <input  type="submit" class="btn btn-primary btn-block" name="basic_info" value="Insert Basic Info" >

            </form>




        </div>

    </div>
    <?php

}
else{
    ?>

    <div class="jumbotron alert-success text-center">
    <h1>You have Already Inserted your Basic Information</h1>
        <a href="index.php" class="btn btn-success">Back to profile</a>

    </div>


<?php
}
?>