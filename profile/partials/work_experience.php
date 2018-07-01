
<?php

if(isset($_POST['work_ex'])){


        $user_id = $_SESSION['user_id'];
        $cname = trim($_POST['cname']);
        $position = trim($_POST['position']);
        $duration = trim($_POST['duration']);
        $details = trim($_POST['details']);

        $work_ex = "insert into work_experience(user_id,cname,position,duration,details)VALUES ('$user_id','$cname','$position','$duration','$details')";

        if($connect->query($work_ex)){

            echo "success";


        }








}





?>


<div class="row">
    <div class="text-center">
        <h2> Work Experience</h2>

    </div>
    <div class="col-md-10">
        <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">

            <div class="form-group">
                <input type="text" name="cname" placeholder="Company name" class="form-control" required>


            </div>
            <div class="form-group">
                <input type="text" name="position" placeholder="whats your position on that company"  class="form-control" required>


            </div>
            <div class="form-group">
                <input type="text" name="duration" placeholder="Ex.2012-2013"  class="form-control" required>


            </div>
            <div class="form-group">
                <textarea type="text" name="details" placeholder="write something about it" rows="3"  class="form-control" required></textarea>


            </div>
            <input type="submit" name="work_ex" value="submit work" class="form-control btn btn-primary btn-block">
        </form>


    </div>

</div>