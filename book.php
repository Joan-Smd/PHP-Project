<?php
session_start();
include("dbconnect.php");
$uid=$_SESSION['id'];
echo $uid;
$eid=$_REQUEST['eid'];
echo $eid;
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>book</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style media="screen">
    body {
  background-image: linear-gradient(to right, #7B1FA2, #E91E63)
}

.section {
  position: relative;
  height: 100vh
}

.section .section-center {
  position: absolute;
  top: 50%;
  left: 0;
  right: 0;
  -webkit-transform: translateY(-50%);
  transform: translateY(-50%)
}

#booking {
  font-family: 'Raleway', sans-serif
}

.booking-form {
  position: relative;
  max-width: 642px;
  width: 100%;
  margin: auto;
  padding: 40px;
  overflow: hidden;
  background-image: url('https://images.unsplash.com/photo-1517960413843-0aee8e2b3285?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTB8fGFkdmVudHVyZXxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&w=1000&q=80');
  background-size: cover;
  border-radius: 5px;
  z-index: 20
}

.booking-form::before {
  content: '';
  position: absolute;
  left: 0;
  right: 0;
  bottom: 0;
  top: 0;
  background: rgba(0, 0, 0, 0.7);
  z-index: -1
}

.booking-form .form-header {
  text-align: center;
  position: relative;
  margin-bottom: 30px
}

.booking-form .form-header h1 {
  font-weight: 700;
  text-transform: capitalize;
  font-size: 42px;
  margin: 0px;
  color: #fff
}

.booking-form .form-group {
  position: relative;
  margin-bottom: 30px
}

.booking-form .form-control {
  background-color: rgba(255, 255, 255, 0.2);
  height: 60px;
  padding: 0px 25px;
  border: none;
  border-radius: 40px;
  color: #fff;
  -webkit-box-shadow: 0px 0px 0px 2px transparent;
  box-shadow: 0px 0px 0px 2px transparent;
  -webkit-transition: 0.2s;
  transition: 0.2s
}

.booking-form .form-control::-webkit-input-placeholder {
  color: rgba(255, 255, 255, 0.5)
}

.booking-form .form-control:-ms-input-placeholder {
  color: rgba(255, 255, 255, 0.5)
}

.booking-form .form-control::placeholder {
  color: rgba(255, 255, 255, 0.5)
}

.booking-form .form-control:focus {
  -webkit-box-shadow: 0px 0px 0px 2px #ff8846;
  box-shadow: 0px 0px 0px 2px #ff8846
}

.booking-form input[type="date"].form-control {
  padding-top: 16px
}

.booking-form input[type="date"].form-control:invalid {
  color: rgba(255, 255, 255, 0.5)
}

.booking-form input[type="date"].form-control+.form-label {
  opacity: 1;
  top: 10px
}

.booking-form select.form-control {
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none
}

.booking-form select.form-control:invalid {
  color: rgba(255, 255, 255, 0.5)
}

.booking-form select.form-control+.select-arrow {
  position: absolute;
  right: 15px;
  top: 50%;
  -webkit-transform: translateY(-50%);
  transform: translateY(-50%);
  width: 32px;
  line-height: 32px;
  height: 32px;
  text-align: center;
  pointer-events: none;
  color: rgba(255, 255, 255, 0.5);
  font-size: 14px
}

.booking-form select.form-control+.select-arrow:after {
  content: '\279C';
  display: block;
  -webkit-transform: rotate(90deg);
  transform: rotate(90deg)
}

.booking-form select.form-control option {
  color: #000
}

.booking-form .form-label {
  position: absolute;
  top: -10px;
  left: 25px;
  opacity: 0;
  color: #ff8846;
  font-size: 11px;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 1.3px;
  height: 15px;
  line-height: 15px;
  -webkit-transition: 0.2s all;
  transition: 0.2s all
}

.booking-form .form-group.input-not-empty .form-control {
  padding-top: 16px
}

.booking-form .form-group.input-not-empty .form-label {
  opacity: 1;
  top: 10px
}

.booking-form .submit-btn {
  color: #fff;
  background-color: #e35e0a;
  font-weight: 700;
  height: 60px;
  padding: 10px 30px;
  width: 100%;
  border-radius: 40px;
  border: none;
  text-transform: uppercase;
  font-size: 16px;
  letter-spacing: 1.3px;
  -webkit-transition: 0.2s all;
  transition: 0.2s all
}

.booking-form .submit-btn:hover,
.booking-form .submit-btn:focus {
  opacity: 0.9
}
    </style>
  </head>
  <body>
    <div id="booking" class="section">
    <div class="section-center">
        <div class="container">
            <div class="row">
                <div class="booking-form">
                    <div class="form-header">
                        <h1>Ready To Go!</h1>
                    </div>
                    <form action="" method="post">
                        <div class="form-group"> <input class="form-control" type="text" placeholder="Your Address" name="address"> <span class="form-label">Destination</span> </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group"> <input class="form-control" type="date" name="date" required> <span class="form-label">Date</span> </div>
                            </div>

                        </div>
                        <div class="row">

                          <div class="col-md-6">
                              <div class="form-group"> <input class="form-control" type="tel" placeholder="No of Adults" name="adult"> <span class="form-label">Adult</span> </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group"> <input class="form-control" type="tel" placeholder="No of Children" name="children"> <span class="form-label">Children</span> </div>
                          </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group"> <input class="form-control" type="email" placeholder="Enter your Email" name="email"> <span class="form-label">Email</span> </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group"> <input class="form-control" type="tel" placeholder="Enter you Phone" name="phone"> <span class="form-label">Phone</span> </div>
                            </div>
                        </div>
                        <div class="form-btn">
                          <input type="hidden" name="eid" value="<?php echo $eid; ?>">
                           <input type="submit" name="submit" class="submit-btn" /> </div>
                    </form>
                    <?php
                    if(isset($_POST['submit']))
                    {
                      $id=mysqli_real_escape_string($connect,$_POST['id']);
                      $bookid=rand(100,200);
                      $address=mysqli_real_escape_string($connect,$_POST['address']);
                      $date=date('Y-m-d', strtotime($_POST['date']));
                      $adult=mysqli_real_escape_string($connect,$_POST['adult']);
                      $children=mysqli_real_escape_string($connect,$_POST['children']);
                      $email=mysqli_real_escape_string($connect,$_POST['email']);
                      $phone=mysqli_real_escape_string($connect,$_POST['phone']);
                      $sql="INSERT INTO `book`(id,bookid,eventid,address,date,adult,children,email,phone,usermail) values ('$id','$bookid','$eid','$address','$date','$adult','$children','$email','$phone','$uid')";
                      $res=mysqli_query($connect,$sql);
						if($res)
						{
							echo "<script>alert('Make Payment & Confirm Your Booking'); window.location = 'userbooking.php';</script>";
						}
						else
						{
							echo "<script>alert('Data notinserted')</script>";
						}
                    }
                     ?>
                </div>
            </div>
        </div>
    </div>
</div>

  </body>
</html>
