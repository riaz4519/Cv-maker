<?php

    if (isset($_POST['award'])){
        $user_id = $_SESSION['user_id'];
        $naward = trim($_POST['naward']);
        $ncomp = trim($_POST['ncomp']);
        $year = trim($_POST['year']);
        $details = trim($_POST['details']);


        $query_award = "insert into award(user_id,naward,ncomp,year,details)VALUES ('$user_id','$naward','$ncomp','$year','$details')";

        if($connect->query($query_award)){
            echo 'success';

        }


    }



?>

<div class="row">

    <div class="well text-center ">
        <h1 >Awards</h1>

    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading text-center">
                    <p>Insert Your Awards</p>

                </div>
                <form class="" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" >
                    <div class="panel-body">
                        <div class="form-group">
                            <input type="text" class="form-control" name="naward" placeholder="Name of Your Award" required>

                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" class="form-control"  name="ncomp" placeholder="Name of th Company or institution"  required>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control"  name="year" placeholder="year of award giving"  required>
                                </div>

                            </div>


                        </div>
                        <div class="form-group">
                            <textarea type="text" class="form-control" name="details" placeholder="write something about your Award"></textarea>

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