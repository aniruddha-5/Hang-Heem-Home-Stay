<?php include('db_config.php') ?>

<?php

//Status Submit
if(isset($_POST['submit_pic'])){
   
    $document =$_FILES["document"]['name'];
    $target = "HoestayPic/".basename($_FILES['document']['name']);
    $description = $_POST['description'];
    // echo $document;

   if(empty($document) || empty($description)){
       
    $_SESSION['status'] = 'Invalid Input Field';
    $_SESSION['status_code'] = 'warning';
    header("Location: gallery.php");
   }
   else{
    $sql ="INSERT INTO `homwstayPic`(`document`,`description`) VALUES ('$document','$description') ";
    $mysqli->query($sql);
    move_uploaded_file($_FILES['document']['tmp_name'],$target);
    $_SESSION['status'] = 'Successfully Updated';
    $_SESSION['status_code'] = 'success';
    header("Location: gallery.php");
   }

}


// Annual Report Submit

if(isset($_POST['submit_annualReport'])){
   
    $document =$_FILES["document"]['name'];
    $target = "WBDocuments/".basename($_FILES['document']['name']);
    $name = $_POST['name'];
    $year = $_POST['year'];
    $catagory = $_POST['catagory'];
    $publisherName = $_POST['publisherName'];
    if(empty($document) || empty($name) || empty($catagory) || empty($publisherName) || empty($year)){
       
        $_SESSION['status'] = 'Invalid Input Field';
        $_SESSION['status_code'] = 'warning';
        header("Location: annualreport.php");
       }
       else{
            $sql ="INSERT INTO `documents`(`name`, `catagory`, `document`,`publisherName`) VALUES ('$name','$catagory','$document','$publisherName') ";
            $mysqli->query($sql);

            
            $sql ="INSERT INTO `anualreport` (`name`,`year` ,`document`) VALUES ('$name','$year','$document') ";
            $mysqli->query($sql);
            
            move_uploaded_file($_FILES['document']['tmp_name'],$target);
            
            $sql ="INSERT INTO `userDetails`(`name`, `catagory`) VALUES ('$publisherName','$catagory') ";
            $mysqli->query($sql);
            // echo ($mysqli->error);
            $_SESSION['status'] = 'Successfully Updated';
            $_SESSION['status_code'] = 'success';
            header("Location: annualreport.php");
       }
}

//Carousel Image Change

if(isset($_POST['submitCarouselImage'])){
    $imgCount = count($_FILES['img']['name']);
    
    $catagory = $_POST['catagory'];
    // echo $document;
    $publisherName = $_POST['publisherName'];
    if($imgCount==0){
        $_SESSION['status'] = 'Invalid Input Field';
        $_SESSION['status_code'] = 'warning';
        header("Location: carousel.php");
    }
       else{
            for($i=0;$i<$imgCount;$i++){
                $img =$_FILES['img']['name'][$i];
                $target = "WBCarousel/".basename($_FILES['img']['name'][$i]);
                $sql ="INSERT INTO `carousel`(`img`,`publisherName`) VALUES ('$img','$publisherName') ";
            $mysqli->query($sql);
            move_uploaded_file($_FILES['img']['tmp_name'][$i],$target);
            }
            $sql ="INSERT INTO `userDetails`(`name`, `catagory`) VALUES ('$publisherName','$catagory') ";
            $mysqli->query($sql);
            $_SESSION['status'] = 'Successfully Updated';
            $_SESSION['status_code'] = 'success';
            header("Location: carousel.php");
    }
}


//Change Permission of User Asccess
if(isset($_POST['submit_permission'])){
   
    $name = $_POST['name'];
    $constitution = $_POST['constitution'];
    $organization = $_POST['organization'];
    $govtorders = $_POST['govtorders'];
    $publication = $_POST['publication'];
    $annualreport = $_POST['annualreport'];
    $gallery = $_POST['gallery'];
    $govtcolleges = $_POST['govtcolleges'];
    $archive = $_POST['archive'];
    $notices = $_POST['notices'];
    $carousel = $_POST['carousel'];

    $sql = " UPDATE `permission` SET `Constitution`='$constitution',`organization`='$organization',`govtorders`='$govtorders',`publication`='$publication',`annualreport`='$annualreport',`gallery`='$gallery',`govtcolleges`='$govtcolleges',`archive`='$archive',`notice`='$notices',`carousel`='$carousel' WHERE `name`='$name' ";
    // echo $document;
    $mysqli->query($sql);
    $_SESSION['status'] = 'Successfully Updated';
    $_SESSION['status_code'] = 'success';
    header("Location: changePermission.php");

}

//Upload Image Catagory

if(isset($_POST['submit_image_catagory'])){
   
    $catagory = $_POST['catagory'];
    $description = $_POST['description'];
    $publisherName = $_POST['publisherName'];
    if(empty($catagory) || empty($publisherName)){
       
        $_SESSION['status'] = 'Invalid Input Field';
        $_SESSION['status_code'] = 'warning';
        header("Location: gallery.php");
    }
       else{
            $sql ="INSERT INTO `imgcatagory`(`id`, `name`) VALUES ('$catagory','$catagory') ";
            $mysqli->query($sql);
            echo ($mysqli->error);
            $sql ="INSERT INTO `userDetails`(`name`, `catagory`) VALUES ('$publisherName','$catagory') ";
            $mysqli->query($sql);
            $_SESSION['status'] = 'Successfully Updated';
            $_SESSION['status_code'] = 'success';
            header("Location: gallery.php");
       }

}

//Upload Image
if(isset($_POST['submit_image'])){
    $imgCount = count($_FILES['img']['name']);
    
     $CatagoryName = $_POST['CatagoryName'];
     // echo $document;
     $publisherName = $_POST['publisherName'];
     if($imgCount==0){
        $_SESSION['status'] = 'Invalid Input Field';
        $_SESSION['status_code'] = 'warning';
        header("Location: photoGallery.php");
    }
       else{
        for($i=0; $i<$imgCount;$i++){
            $img =$_FILES["img"]['name'][$i];
            $target = "WBPhotoes/".basename($_FILES['img']['name'][$i]);
        $sql ="INSERT INTO `image`(`CatagoryName`, `publisherName`, `img`) VALUES ('$CatagoryName','$publisherName','$img') ";
        $mysqli->query($sql);
        
        $sql ="UPDATE `imgcatagory` SET `recentImg`='$img' WHERE `name`='$CatagoryName' ";
        $mysqli->query($sql);
        echo ($mysqli->error);
        move_uploaded_file($_FILES['img']['tmp_name'][$i],$target);
        }
        $sql ="INSERT INTO `userDetails`(`name`, `catagory`) VALUES ('$publisherName','$CatagoryName') ";
        $mysqli->query($sql);
            $_SESSION['status'] = 'Successfully Updated';
            $_SESSION['status_code'] = 'success';
        header("Location: photoGallery.php");

    }
 }

 //Upload Govt College

 if(isset($_POST['submit_govtCollege'])){
   
    $collegeName = $_POST['name'];
    $catagory = $_POST['catagory'];
    $collegeCatagory = $_POST['collegeCatagory'];
    $zone = $_POST['zone'];
    $link = $_POST['link'];
    $publisherName = $_POST['publisherName'];
    if(empty($catagory) || empty($publisherName) || empty($catagory) || empty($collegeCatagory) || empty($zone) || empty($link)){
       
        $_SESSION['status'] = 'Invalid Input Field';
        $_SESSION['status_code'] = 'warning';
        header("Location: govtCollege.php");
    }
       else{
            $sql ="INSERT INTO `colleges`(`collegeName`, `collegeCatagory`,`link`,`zone`) VALUES ('$collegeName','$collegeCatagory','$link','$zone') ";
            $mysqli->query($sql);  
            $sql ="INSERT INTO `userDetails`(`name`, `catagory`) VALUES ('$publisherName','$catagory') ";
            $mysqli->query($sql);
            $_SESSION['status'] = 'Successfully Updated';
            $_SESSION['status_code'] = 'success';
            header("Location: govtCollege.php");
       }
    // echo ($mysqli->error);

}

//Upload Member Section
if(isset($_POST['submit_member'])){
   
    
    $name = $_POST['name'];
    $catagory = $_POST['catagory'];
    $img =$_FILES["img"]['name'];
    $target = "WBDocuments/".basename($_FILES['img']['name']);
    $designation=$_POST['designation'];
    $department=$_POST['department'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $order = $_POST['order'];
    $publisherName = $_POST['publisherName'];
    // echo $document;
    if(empty($img) || empty($name) || empty($catagory) || empty($publisherName) || empty($designation) || empty($department) || empty($email) || empty($phone) || empty($order)){
       
        $_SESSION['status'] = 'Invalid Input Field';
        $_SESSION['status_code'] = 'warning';
        header("Location: status.php");
       }
    else{
    $sql ="INSERT INTO `organization`(`type`,`name`,`catagory`,`arrangeOrder`,`img`,`designation`,`department`,`email`,`phone`,`publisherName`) VALUES ('Image','$name','$catagory','$order','$img','$designation','$department','$email','$phone','$publisherName') ";
    $mysqli->query($sql);
    echo ($mysqli->error);
        move_uploaded_file($_FILES['img']['tmp_name'],$target);
    //  echo $img;
    $sql ="INSERT INTO `userDetails`(`name`, `catagory`) VALUES ('$publisherName','$catagory') ";
    $mysqli->query($sql);
    $_SESSION['status'] = 'Successfully Updated';
    $_SESSION['status_code'] = 'success';
    header("Location: organizationCatagory.php");
    }
    

}
//Upload File Section
if(isset($_POST['submit_file'])){
   
    
    $name1 = $_POST['name1'];
    $catagory1 = $_POST['catagory1'];
    $document =$_FILES["document"]['name'];
    $publisherName1 = $_POST['publisherName1'];
    $target = "WBDocuments/".basename($_FILES['document']['name']);
    // echo $document;
    if(empty($document) || empty($name1) || empty($catagory1) || empty($publisherName1)){
       
        $_SESSION['status'] = 'Invalid Input Field';
        $_SESSION['status_code'] = 'warning';
        header("Location: status.php");
       }
       else{
            $sql ="INSERT INTO `organization`(`type`,`name`,`catagory`,`document`,`publisherName`) VALUES ('Pdf','$name1','$catagory1','$document','$publisherName1') ";
            $mysqli->query($sql);
            move_uploaded_file($_FILES['document']['tmp_name'],$target);
            $sql ="INSERT INTO `userDetails`(`name`, `catagory`) VALUES ('$publisherName1','$catagory1') ";
            $mysqli->query($sql);
            $_SESSION['status'] = 'Successfully Updated';
            $_SESSION['status_code'] = 'success';
            header("Location: organizationCatagory.php");
       }

}

?>