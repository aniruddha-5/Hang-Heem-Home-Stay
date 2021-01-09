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
      
          <div class="row m-1" >
          
              <div class="col-sm-3 m-2">
                    <a href="organization.html" class="btn btn-outline-dark btn-sm">
                        <h3><i class="fa fa-arrow-left"></i></h3>
                    </a>
                    
              </div>
              <div class="col-sm-3 m-2">
                <a href="#" class="btn btn-primary " data-toggle="modal" data-target="#addCatagoryModal">
                        <i class="fa fa-plus"></i> Add Member
                    </a>
              </div>
              <div class="col-sm-3 m-2">
                <a href="#" class="btn btn-primary " data-toggle="modal" data-target="#addCatagoryModal1">
                        <i class="fa fa-plus"></i> Add File
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
                    <h5 class="modal-title">Add Member</h5>
                    <button class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <form action="code.php" method="post" enctype="multipart/form-data">
                <div class="modal-body" id="main-body">
                <input type="hidden" id="publisherName" name="publisherName"class="form-control">
                        <div class="form-group">
                            <label for="title" >Name</label>
                            <input type="text" id="name" name="name"class="form-control">
                        </div>
                        <div class="form-group" >
                            <label for="title" >Designation</label>
                            <input type="text" id="designation" name="designation"class="form-control">
                        </div>
                        <div class="form-group" >
                            <label for="title" >Arrenging Order</label>
                            <input type="number" id="order" name="order"class="form-control">
                        </div>
                        <div class="form-group"id="heading3">
                            <label for="title">Catagory</label>
                            <input type="text" name="catagory" id="catagory" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="title">Department</label>
                            <input type="text" name="department" id="department" class="form-control">
                        </div>
                        
                        <div class="form-group">
                            <label for="title">Upload Image</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="img" name="img">
                                <label for="file" class="custom-file-label">Choose File</label>
                            </div>
                            <small class="form-text text-muted">Max Size 3 mb</small>
                        </div>
                        <div class="form-group">
                            <label for="title">Email</label>
                            <input type="text" name="email" id="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="title">Phone</label>
                            <input type="text" name="phone" id="phone" class="form-control">
                        </div>

                </div>
                    <div class="modal-footer">
                        <input type="submit" name="submit_member" class="btn btn-primary"  id="submitBtn"  value="Upload">
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <!-- ADD file Modal -->
    <div class="modal fade" id="addCatagoryModal1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title">Add File</h5>
                    <button class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <form action="code.php" method="post" enctype="multipart/form-data">
                <div class="modal-body" id="main-body">
                <input type="hidden" id="publisherName1" name="publisherName1"class="form-control">
                        <div class="form-group" id="heading1">
                            <label for="title" id="label">Title</label>
                            <input type="text" id="name1" name="name1"class="form-control">
                        </div>
                        <div class="form-group"id="heading3">
                            <label for="title">Catagory</label>
                            <input type="text" name="catagory1" id="catagory1" class="form-control">
                        </div>
                        
                        <div class="form-group">
                            <label for="title">Upload File</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="document" name="document">
                                <label for="file1" class="custom-file-label">Choose PDF</label>
                            </div>
                            <small class="form-text text-muted">Max Size 3 mb</small>
                        </div>

                </div>
                    <div class="modal-footer">
                        <input type="submit" name="submit_file" class="btn btn-primary"  id="submitBtn"  value="Upload">
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    
    
    
    
    
    <?php include('footer.php') ?>
    <script>

        let catagory = document.getElementById('catagory');
        let catagory1 = document.getElementById('catagory1');
        let catagoryValue = sessionStorage.getItem('catagory');
        let publisherName = document.getElementById('publisherName');
        let username = sessionStorage.getItem('username');
        publisherName.value = username;
        let publisherName1 = document.getElementById('publisherName1')
        publisherName1.value = username;
        catagory.value= catagoryValue;
        catagory1.value= catagoryValue;
        
        console.log(catagory.value);
        
        window.addEventListener('DOMContentLoaded',()=>{

            axios.get(`./WBDocumentsAPis/organization.php`)
            .then((response)=>{
                console.log(response.data);
                let datas =[];
                datas = response.data;
                console.log(datas);
                let output=`<thead class="thead-dark">
                            <tr>
                                <th>Title</th>
                                <th>Type</th>
                                <th>Order</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>`;
                datas.map((data)=>{
                    console.log(data);
                    if(catagory.value==data.catagory){
                    output+=`
                    <tr>
                        <td>${data.name}</td>
                        <td>${data.type}</td>
                        <td>${data.arrangeOrder}</td>
                        <td><a  onclick="deletePost('${data.id}')" class="btn btn-secondary text-white">
                                         <i class="fas fa-angle-double-right"></i> Delete
                                     </a></td>
                        
                    </tr>
                    
                    `;
                    }
                });
                output+=`</tbody>`;
                let table= document.getElementById('table');
                table.innerHTML=output;
            })
        })
        deletePost = (id)=>{
            axios.get(`./WBDocumentsAPis/delete/organizationDelete.php?id=${id}`)
            .then( res => console.log(res));
            swal({
                title: "Successfully Deleted The Post",
                // text: "You clicked the button!",
                icon: "success",
                });
                setTimeout(()=>{
                    window.location ='organizationCatagory.php';
                },2000)
            

        }
                    
    </script>
</body>
</html>