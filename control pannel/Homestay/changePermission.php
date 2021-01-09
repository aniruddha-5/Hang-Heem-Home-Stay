

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
    <!-- Navbar Section -->
    

  <!-- Header Section -->
  <header class="py-4 bg-primary text-white" id="main-header">
      <div class="container">
          <div class="row">
              <div class="col-md-6">
                  <h1 id="title"><i class="fas fa-cog"></i>  </h1>
              </div>
          </div>
      </div>
  </header>
    <div class="container p-3 m-auto" id="alerts">

    </div>

    <section class="bg-light p-3">
      <div class="container">
        <a href="permission.html" class="btn btn-outline-dark btn-sm"><h3><i class="fa fa-arrow-left"></i></h3></a>
      </div>
    
  </section>

  <!-- Recent Posts -->
  <section id="post" class="py-5">
      <div class="container ">
          <div class="row">
              <div class="col-md-10">
                <form action="code.php" method="post">
                  <div class="card m-auto">
                      <div class="card-header">
                          <h4>Change Permission</h4>
                      </div>
                      <input type="hidden" name="name" id="name">
                      <table class="table table-striped" id="table">
                        <thead class="thead-dark">
                            <tr>
                                
                                <th>Catagory</th>
                                <th>Change Permission</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Constitution</td>
                                    <td>
                                        <div class="form-check-inline">
                                            <label class="form-check-label">
                                              <input type="radio" class="form-check-input" name="constitution" id="constitution1" value="True">Access
                                            </label>
                                          </div>
                                          <div class="form-check-inline">
                                            <label class="form-check-label">
                                              <input type="radio" class="form-check-input" name="constitution" id="constitution2"value="False">Denay
                                            </label>
                                          </div>
                                    </td>                        
                                </tr>
                                <tr>
                                    <td>Organization</td>
                                    <td>
                                        <div class="form-check-inline">
                                            <label class="form-check-label">
                                              <input type="radio" class="form-check-input" name="organization" id="organization1"value="True">Access
                                            </label>
                                          </div>
                                          <div class="form-check-inline">
                                            <label class="form-check-label">
                                              <input type="radio" class="form-check-input" name="organization" id="organization2" value="False">Denay
                                            </label>
                                          </div>
                                    </td>                        
                                </tr>
                                <tr>
                                    <td>Govt Orders</td>
                                    <td>
                                        <div class="form-check-inline">
                                            <label class="form-check-label">
                                              <input type="radio" class="form-check-input" name="govtorders" id="govtorders1" value="True">Access
                                            </label>
                                          </div>
                                          <div class="form-check-inline">
                                            <label class="form-check-label">
                                              <input type="radio" class="form-check-input" name="govtorders" id="govtorders2"value="False">Denay
                                            </label>
                                          </div>
                                    </td>                        
                                </tr>
                                <tr>
                                    <td>Publication</td>
                                    <td>
                                        <div class="form-check-inline">
                                            <label class="form-check-label">
                                              <input type="radio" class="form-check-input" name="publication" id="publication1" value="True">Access
                                            </label>
                                          </div>
                                          <div class="form-check-inline">
                                            <label class="form-check-label">
                                              <input type="radio" class="form-check-input" name="publication" id="publication2" value="False">Denay
                                            </label>
                                          </div>
                                    </td>                        
                                </tr>
                                <tr>
                                    <td>Annual Report</td>
                                    <td>
                                        <div class="form-check-inline">
                                            <label class="form-check-label">
                                              <input type="radio" class="form-check-input" name="annualreport" id="annualreport1" value="True">Access
                                            </label>
                                          </div>
                                          <div class="form-check-inline">
                                            <label class="form-check-label">
                                              <input type="radio" class="form-check-input" name="annualreport" id="annualreport2" value="False">Denay
                                            </label>
                                          </div>
                                    </td>                        
                                </tr>
                                <tr>
                                    <td>Gallery</td>
                                    <td>
                                        <div class="form-check-inline">
                                            <label class="form-check-label">
                                              <input type="radio" class="form-check-input" name="gallery" id="gallery1" value="True">Access
                                            </label>
                                          </div>
                                          <div class="form-check-inline">
                                            <label class="form-check-label">
                                              <input type="radio" class="form-check-input" name="gallery" id="gallery2" value="False">Denay
                                            </label>
                                          </div>
                                    </td>                        
                                </tr>
                                <tr>
                                    <td>Govt Colleges</td>
                                    <td>
                                        <div class="form-check-inline">
                                            <label class="form-check-label">
                                              <input type="radio" class="form-check-input" name="govtcolleges" id="govtcolleges1" value="True">Access
                                            </label>
                                          </div>
                                          <div class="form-check-inline">
                                            <label class="form-check-label">
                                              <input type="radio" class="form-check-input" name="govtcolleges" id="govtcolleges2" value="False">Denay
                                            </label>
                                          </div>
                                    </td>                        
                                </tr>
                                <tr>
                                    <td>Archive</td>
                                    <td>
                                        <div class="form-check-inline">
                                            <label class="form-check-label">
                                              <input type="radio" class="form-check-input" name="archive" id="archive1" value="True">Access
                                            </label>
                                          </div>
                                          <div class="form-check-inline">
                                            <label class="form-check-label">
                                              <input type="radio" class="form-check-input" name="archive" id="archive2" value="False">Denay
                                            </label>
                                          </div>
                                    </td>                        
                                </tr>
                                <tr>
                                    <td>Notices</td>
                                    <td>
                                        <div class="form-check-inline">
                                            <label class="form-check-label">
                                              <input type="radio" class="form-check-input" name="notices" id="notice1" value="True">Access
                                            </label>
                                          </div>
                                          <div class="form-check-inline">
                                            <label class="form-check-label">
                                              <input type="radio" class="form-check-input" name="notices" id="notice2" value="False">Denay
                                            </label>
                                          </div>
                                    </td>                        
                                </tr>
                                <tr>
                                    <td>Carousel</td>
                                    <td>
                                        <div class="form-check-inline">
                                            <label class="form-check-label">
                                              <input type="radio" class="form-check-input" name="carousel" id="carousel1" value="True">Access
                                            </label>
                                          </div>
                                          <div class="form-check-inline">
                                            <label class="form-check-label">
                                              <input type="radio" class="form-check-input" name="carousel"id="carousel2" value="False">Denay
                                            </label>
                                          </div>
                                    </td>                        
                                </tr>
                            </tbody>
                      </table>
                  </div>
                  <input type="submit" name="submit_permission" class="btn btn-primary btn-lg float-right m-3"  id="submitBtn"  value="Save Changes">

                </form>
              </div>
          </div>
      </div>
  </section>


  <?php include('footer.php') ?>              
    <script>
        $('#year').text(new Date().getFullYear());

        let login = sessionStorage.getItem('login');
        let userID = document.getElementById('userID');
        // console.log(login);
        let name = sessionStorage.getItem('name');
        let username = document.getElementById('name');
        username.value = name;
        window.addEventListener('DOMContentLoaded',()=>{

            let title = document.getElementById('title');
            title.innerHTML = sessionStorage.getItem('name');
                    axios.get(`./WBDocumentsAPis/permission.php?name=${name}`)
                    .then((response)=>{
                        // console.log(response.data);
                        let data = response.data[0];
                        console.log(data);
                            if(data.Constitution=='True'){
                              document.getElementById("constitution1").checked = true;
                            }
                            else{
                              document.getElementById("constitution2").checked = true;
                            }
                            if(data.organization=='True'){
                              document.getElementById("organization1").checked = true;
                            }
                            else{
                              document.getElementById("organization2").checked = true;
                            }
                            if(data.govtorders=='True'){
                              document.getElementById("govtorders1").checked = true;
                            }
                            else{
                              document.getElementById("govtorders2").checked = true;
                            }
                            if(data.publication=='True'){
                              document.getElementById("publication1").checked = true;
                            }
                            else{
                              document.getElementById("publication2").checked = true;
                            }
                            if(data.annualreport=='True'){
                              document.getElementById("annualreport1").checked = true;
                            }
                            else{
                              document.getElementById("annualreport2").checked = true;
                            }
                            if(data.gallery=='True'){
                              document.getElementById("gallery1").checked = true;
                            }
                            else{
                              document.getElementById("gallery2").checked = true;
                            }
                            if(data.govtcolleges=='True'){
                              document.getElementById("govtcolleges1").checked = true;
                            }
                            else{
                              document.getElementById("govtcolleges2").checked = true;
                            }
                            if(data.archive=='True'){
                              document.getElementById("archive1").checked = true;
                            }
                            else{
                              document.getElementById("archive2").checked = true;
                            }
                            if(data.notice=='True'){
                              document.getElementById("notice1").checked = true;
                            }
                            else{
                              document.getElementById("notice2").checked = true;
                            }
                            if(data.carousel=='True'){
                              document.getElementById("carousel1").checked = true;
                            }
                            else{
                              document.getElementById("carousel2").checked = true;
                            }
                            // console.log(data.CatagoryName);
                        let table= document.getElementById('table');
                        // table.innerHTML=output;
                    
                })
            
    })
        
    </script>
</body>
</html>