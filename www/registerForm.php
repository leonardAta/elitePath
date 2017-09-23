<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>


    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <h1 class="page-header text-center">Registration Form</h1>
                <form class="form-horizontal" role="form" method="post" action="regform.php" name="regForm.php">
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" name="name" required placeholder="First & Last Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
                            <?php echo "<p class='text-danger'>$errName</p>";?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="email" name="email" required placeholder="example@yahoo.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
                            <?php echo "<p class='text-danger'>$errEmail</p>";?>
                        </div>
                    </div>
                          
                     <div class="form-group">
                        <label for="phone" class="col-sm-2 control-label">Phone</label>
                        <div class="col-sm-10">
                            <input type="tel" class="form-control" id="phone" name="phone" required placeholder="Mobile Number" value="<?php echo htmlspecialchars($_POST['phone']); ?>">
                            <?php echo "<p class='text-danger'>$errPhone</p>";?>
                        </div>
                    </div>
                    <div class="form-group">
                    <select>
                        <option class="form-control s-form-v4__input g-padding-1-0--xs" value="course" selected id="course" name="course">Courses</option>
                        <option value="fswd">FullStack Web Development</option>
                        <option value="Dm">Digital Marketing</option>
                    </select>  

                    </div>

                    <div class="form-group">
                    <select>
                        <option class="form-control s-form-v4__input g-padding-1-0--xs" value="Qualification" selected id="qualification" name="qualification">Qualification</option>
                        <option value="fswd">First School Leaving</option>
                        <option value="Dm">Wassce</option>
                         <option value="Dm">OND</option>
                          <option value="Dm">HND</option>
                           <option value="Dm">BSc</option>
                            <option value="Dm">MSc</option>
                             <option value="Dm">PhD</option>
                    </select>  

                    </div>

                    <div class="form-group">
                        <label for="message" class="col-sm-2 control-label">About You</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" rows="4" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
                            <?php echo "<p class='text-danger'>$errMessage</p>";?>
                        </div>
                    </div>
                  
                    <div class="form-group">
                        <div class="col-sm-10 col-sm-offset-2">
                            <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-10 col-sm-offset-2">
                            <?php echo $result; ?>  
                        </div>
                    </div>
                </form> 
            </div>
        </div>
    </div>   

</body>
</html>