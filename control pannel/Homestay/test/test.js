


let submit = document.getElementById('submitForm');
submit.addEventListener('submit',(e)=>{
  e.preventDefault();
  let name = document.getElementById('name');
  let catagory=document.getElementById('catagory');
  let publisherName='Abhijit'
  let files = document.querySelector('[type=file]').files;
    
    
    let formData = new FormData();
    formData.append("file",files[0]);
    console.log("Enter");
    console.log(name.value);
    console.log(catagory.value);
    console.log(formData.values());

    let xhttp = new XMLHttpRequest();
    

    xhttp.open("POST", "test.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send(`name=${name.value}&catagory=${catagory.value}&publisherName=${publisherName}&document=${formData.values}`);

    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
          console.log('Completed');
        document.getElementById("demo").innerHTML = 'Successfull';
      }
    };
  
        
    

})