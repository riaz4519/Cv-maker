
<?php
    if (isset($_POST['education'])){

        $user_id = $_SESSION['user_id'];

        $category = trim($_POST['category']);
        $iname = trim($_POST['iname']);
        $year = trim($_POST['year']);
        $result = trim($_POST['result']);
        $details = trim($_POST['details']);

        $education = "insert into education(user_id,category,iname,year,result,details)VALUES ('$user_id','$category','$iname','$year','$result','$details')";

        if($connect->query($education)){
            echo "success";

        }



    }




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
                                <option value="high school">HIGH SCHOOL</option>
                                <option value="school">SCHOOL</option>
                                <option value="college">COLLEGE</option>
                                <option value="university">UNIVERSITY</option>

                            </select>


                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Enter Institute Name" name="iname" required>

                        </div>
                        <div class="form-group">
                            <div class="row">

                                <div class=" col-md-6">
                                    <input type="text" name="year" class="form-control col-md-6" placeholder="year Ex.2012-2013" required>
                                </div>
                                <div class=" col-md-6">
                                    <input type="text" name="result" class="form-control col-md-6" placeholder="Enter Your Result" required>
                                </div>



                            </div>

                        </div>

                        <div class="form-group">
                            <textarea type="text" name="details" class="form-control" placeholder="Enter Institute Name" rows="3"></textarea>

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