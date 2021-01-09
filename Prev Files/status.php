<?php
if(isset($_POST['submit'])){
   
    $document =$_FILES["document"]['name'];
    $target = "WBDocuments/".basename($_FILES['document']['name']);
    $name = $_POST['name'];
    $type = $_POST['type'];
    $catagory = $_POST['catagory'];
    // echo $document;
    date_default_timezone_set("Asia/Kolkata");
$CurrentTime = time();
$DateTime = strftime("%B-%d-%Y %H:%M:%S", $CurrentTime);

    $mysqli = new mysqli('localhost', 'dipakkole', 'A@768699b', 'com20') or die(mysqli_error($mysqli));
    $sql ="INSERT INTO `documents`(`name`, `type`, `catagory`, `document`,`publisherName`,`date`) VALUES ('$name','$type','$catagory','$document','NULL','$DateTime') ";
    $mysqli->query($sql);
      move_uploaded_file($_FILES['document']['tmp_name'],$target);
    header("Location: status.php");
    // echo ($mysqli->error);
     
        //  move_uploaded_file($_FILES['document']['tmp_name'],$target);
        //  if(move_uploaded_file($_FILES['document']['tmp_name'],$target)){
        //       echo "Abhijit";
        //  }
        //  else{
        //      echo "failed";
        //  }

}
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome To Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="./fontawesome-free-5.13.0-web/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/dashboard.css">
</head>
<body>

  <!-- Header Section -->
  <header class="py-4 bg-primary text-white" id="main-header">
      <div class="container">
          <div class="row">
              <div class="col-md-6">
                  <h1><i class="fa fa-camera"></i> Status</h1>
              </div>
          </div>
      </div>
  </header>

  <!-- Small Section -->



  <!-- Actions -->
  <section id="actions" class="py-4 mb-4 bg-light">
      <div class="container">
          <div class="row " >
              <div class="col-sm-3">
                <a href="catagory.html" class="btn btn-outline-dark btn-sm m-3">
                    <h3><i class="fa fa-arrow-left"></i></h3>
                </a>
                  <a href="#" class="btn btn-primary " data-toggle="modal" data-target="#addCatagoryModal">
                      <i class="fa fa-plus"></i> Add catagory
                  </a>
              </div>
              
          </div>
      </div>
  </section>
  
    <section class="container p-3 m-auto">
        <div class="container">
            <table class="table table-dark table-hover" id="table">
            
            </table>
        </div>
    </section>   


  <!-- Catagories Section -->

    <!-- <div class="container p-4">
        <div class="row">
            <div class="col-md-3">
                <div class="card text-center bg-success text-white mb-3">
                    <div class="card-body">
                        <h3>Constitution</h3>
                        <h4 class="display-4">
                            <i class="fas fa-folder"></i> 7
                        </h4>
                        <a href="status.html" class="btn btn-outline-light btn-sm">VIEW</a>
                    </div>
                </div>
            </div>
            
        </div>
    </div> -->





    <!-- Models -->

    <!-- Add Catagory Model -->
    <div class="modal fade" id="addCatagoryModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title">Add Catagory</h5>
                    <button class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <form action="http://dipakole.in/status.php" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" id="name" name="name"class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="title">Type</label>
                            <select name="type" id="type" name="type" class="form-control">
                                <option value="PDF">PDF</option>
                                <option value="Image">Image</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="title">Catagory</label>
                            <input type="text" name="catagory" id="catagory" class="form-control">
                        </div>
                        
                        <div class="form-group">
                            <label for="title">Upload File/ Upload PDF</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="document" name="document">
                                <label for="file" class="custom-file-label">Choose File</label>
                            </div>
                            <small class="form-text text-muted">Max Size 3 mb</small>
                        </div>

                </div>
                    <div class="modal-footer">
                        <input type="submit" name="submit" class="btn btn-primary"  id="submitBtn"  value="Upload">
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    
    
    
    
    
    
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script
    src="https://code.jquery.com/jquery-3.5.0.min.js"
    integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ="
    crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script>
        window.addEventListener('DOMContentLoaded',()=>{

            axios.get(`http://dipakole.in/WBDocumentsAPIs/document.php`)
            .then((response)=>{
                console.log(response.data);
                let datas =[];
                datas = response.data;
                let output=`<thead>
                            <tr>
                                <th>File</th>
                                <th>Type</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>`;
                datas.map((data)=>{
                    console.log(data.name);
                    output+=`
                    <tr>
                        <td>${data.name}</td>
                        <td>${data.type}</td>
                        <td><a type="button" class="btn btn-outline-danger">Delete</a></td>
                        
                    </tr>
                    
                    `;
                });
                output+=`</tbody>`;
                let table= document.getElementById('table');
                table.innerHTML=output;
            })
        })
                    
    </script>
</body>
</html>