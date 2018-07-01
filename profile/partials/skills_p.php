<?php

    if (isset($_POST['skill'])){

        $user_id = $_SESSION['user_id'];

        $nskill = trim($_POST['nskill']);
        $range = trim($_POST['range']);
        $details= trim($_POST['details']);

        $skill_q = "insert into skill(user_id,skill_name,range_skill,details)VALUES ('$user_id','$nskill','$range','$details')";

        if($connect->query($skill_q)){
            echo 'success';
        }
    }



?>


<div class="row">

    <div class="well text-center ">
        <h1 >SKILLS</h1>

    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading text-center">
                    <p>Insert Your Skill Set</p>

                </div>
                <form class="" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" oninput="x.value=parseInt(a.value)">
                    <div class="panel-body">
                        <div class="form-group">
                            <input type="text" class="form-control" name="nskill" placeholder="Name of Your Skill" required>

                        </div>
                        <div class="form-group">
                            <output name="x" for="a">Range Your Skill</output>
                            <input type="range" class="form-control" id="a" name="range" min="0" max="100" value="30" required>

                        </div>
                        <div class="form-group">
                            <textarea type="text" class="form-control" name="details" placeholder="write something about you skill"></textarea>

                        </div>

                    </div>

                    <div class="panel-footer">
                        <input type="submit" name="skill" value="Submit Skill" class="form-control btn btn-block btn-primary">

                    </div>

                </form>

            </div>

        </div>

    </div>

</div>