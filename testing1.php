<?php
        include("dbconnect.php");
        if(isset($_POST['submit']))
        {
          echo "success";
          $name=mysqli_real_escape_string($connect,$_POST['name']);
          $place=mysqli_real_escape_string($connect,$_POST['place']);
          $service=mysqli_real_escape_string($connect,$_POST['service']);
          $guide=mysqli_real_escape_string($connect,$_POST['guide']);
          $gnumber=mysqli_real_escape_string($connect,$_POST['gnumber']);
          $image1=mysqli_real_escape_string($connect,$_FILES["image1"]['name']);
          $pricead=mysqli_real_escape_string($connect,$_POST['pricead']);
          $pricech=mysqli_real_escape_string($connect,$_POST['pricech']);
          $description=mysqli_real_escape_string($connect,$_POST['description']);

            $sql="INSERT INTO `addpackage`(name,place,service,guide,gnumber,image1,pricead,pricech,description) VALUES ('$name','$place','$service','$guide','$gnumber','$image1','$pricead','$pricech','$description')";
            $res=mysqli_query($connect,$sql);
            if($res)
            {
              echo "<script>alert('Event Added Successfully'); window.location = 'adminviewpackage.php';</script>";
            }
            else
            {
              echo "<script>alert('Data notinserted')</script>";
            }
        }


        ?>
