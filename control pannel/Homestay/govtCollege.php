<?php include('db_config.php') ?>




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
  
    <section class="container p-1 m-auto">
        <div class="container">
            <div class="card">
                    <div class="card-header">
                        <h4>Latest Updates</h4>
                    </div>
            <table class="table table-striped table-hover" id="table">

            </table>
        </div>
        </div>
    </section>   


  

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
                <form action="code.php" method="post" enctype="multipart/form-data">
                <div class="modal-body" id="main-body">
                <input type="hidden" id="publisherName" name="publisherName"class="form-control">
                        <div class="form-group" >
                            <label for="title" >College Name</label>
                            <input type="text" id="name" name="name"class="form-control">
                        </div>
                        
                            <input type="hidden" name="catagory" id="catagory" class="form-control">
                        
                        <div class="form-group">
                            <label for="title">College Catagory</label>
                            <input type="text" name="collegeCatagory" id="catagory" class="form-control">
                        </div>
                        <div class="form-group" >
                            <label for="title" >Zone</label>
                            <input type="text" id="zone" name="zone"class="form-control">
                        </div>
                        <div class="form-group" >
                            <label for="title" >Link</label>
                            <input type="text" id="link" name="link"class="form-control">
                        </div>


                </div>
                    <div class="modal-footer">
                        <input type="submit" name="submit_govtCollege" class="btn btn-primary"  id="submitBtn"  value="Upload">
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    
    
    
    
    
    
    <?php include('footer.php') ?>
    <script>

        let catagory = document.getElementById('catagory');
        let catagoryValue = sessionStorage.getItem('catagory');
        let publisherName = document.getElementById('publisherName');
        let username = sessionStorage.getItem('username');
        publisherName.value = username;
        catagory.value= catagoryValue;
        console.log(catagory.value);
        window.addEventListener('DOMContentLoaded',()=>{
            axios.get(`./WBDocumentsAPis/collegeCatagory.php`)
            .then((response)=>{
                console.log(response.data);
                let datas =[];
                datas = response.data;
                let output=`<thead class="thead-dark">
                            <tr>
                                <th>College</th>
                                <th>Type</th>
                                <th>Zone</th>
                                <th>Link</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>`;
                datas.map((data)=>{
                    
                    output+=`
                    <tr>
                        <td>${data.collegeName}</td>
                        <td>${data.collegeCatagory}</td>
                        <td>${data.zone}</td>
                        <td>${data.link}</td>
                        <td><a onclick='deletePost(${data.id})' class="btn btn-secondary">
                                         <i class="fas fa-angle-double-right"></i> Delete
                                     </a></td>
                        
                    </tr>
                    
                    `;
                    
                });
                output+=`</tbody>`;
                let table= document.getElementById('table');
                table.innerHTML=output;
            })
        })
        deletePost = (id)=>{
            axios.get(`./WBDocumentsAPis/delete/govtCollegeDelete.php?id=${id}`)
            .then(res=>console.log(res));
            swal({
                title: "Successfully Deleted The Post",
                // text: "You clicked the button!",
                icon: "success",
                });
                setTimeout(()=>{
                    window.location = 'govtCollege.php';
                },2000)
            

        }
                    
    </script>
</body>
</html>