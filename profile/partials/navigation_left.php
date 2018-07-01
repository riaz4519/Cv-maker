<div class="col-md-2 text-center">

    <div class="list-group">
        <a href=""><img src="<?php
            $user_id = $_SESSION['user_id'];

            $img_get = "select image from basic_info WHERE user_id = '$user_id'";
            $img_get_1 = $connect->query($img_get);
            $img_get_2 = $img_get_1->fetch_assoc();

            echo $img_get_2['image'];

            ?>" class="profile_img img-thumbnail"></a>
        <a href="index.php" class="list-group-item">Profile</a>
        <a href="../<?php $query_cv = "select cv_name from selected_cv where user_id = '".$_SESSION['user_id']."' " ;
            if($connect->query($query_cv)){
               $cv =  $connect->query($query_cv);
               $cv = $cv->fetch_object();
               echo $cv->cv_name;

            }
        ?>?id=<?php echo $_SESSION['user_id']?>" class="list-group-item">My Resume</a>
        <a href="edit_info.php" class="list-group-item">Edit Info</a>
        <a href="#" data-toggle="popover" class="list-group-item"  data-content="http://localhost/cv_making/<?php  echo $cv->cv_name;?>?id=<?php echo $_SESSION['user_id']?>">Toggle popover</a>
        <a href="#" class="list-group-item">New Resume</a>
        <a href="select_cv.php" class="list-group-item" style="outline: 1px solid red;">Select your Resume</a>
        <a href="#" class="list-group-item">Get you Cv link</a>


        <li class="list-group-item dropdown" style="outline: 1px solid red;">
            <p class="dropdown-toggle" data-toggle="dropdown">Insert Info<span class="caret"></span></p>
                <ul class="dropdown-menu">
                    <li><a href="basic_info.php">Basic info</a></li>
                    <li><a href="work_ex.php">Work Experience</a></li>
                    <li><a href="education.php">Education</a></li>
                    <li><a href="skills.php">Skills</a></li>
                    <li><a href="awards.php">Awards</a></li>


                </ul>
        </li>

    </div>



</div>