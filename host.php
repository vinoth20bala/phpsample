
<!DOCTYPE html>
<html >
<head>
  <title>Personal Details</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<?php>
  echo "hello world";
  ?>
  
<div class="jumbotron text-center" style="height: 10px">
  <h1>Welcome To E-Portal</h1> 
</div>
    <form class="was-validated">  
<div class="container p-3 my-3 border ">
  <div class="row">
    <div class="col-sm-12">
      <h3>Enter your details:</h3>
    </div>
    <div class="col-sm-4">
    <div class="form-group">
      <label for="usrname">First Name:</label>
      <input type="text" class="form-control" id="usrname" required="">
      </div>
    </div>

      <div class="col-sm-4">
      <div class="form-group">
      <label for="lusrname">Last Name:</label>
      <input type="text" class="form-control" id="lusrname" required="">
      </div>
      </div>
      

<div class="container ">
  <div class="row">
      <div class="col-sm-4">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="text" class="form-control" id="email" required="">
      </div>
    </div>
    </div>
  </div>

      
<div class="container ">
  <div class="row">
      <div class="col-sm-4">
      <div class="form-group">
      <label for="Mobile">Mobile:</label>
      <input type="text" class="form-control" id="Mobile" required="">
      </div>
      </div>
</div>
</div>
<div class="container ">
  <div class="row">
      <div class="col-sm-4">
      <div class="form-group">
      <label for="Address">Address:</label>
      <input type="text" class="form-control" id="Address" required="">
      </div>
      </div>
      
    <div class="row">
      <div class="col-sm-6">
      <div class="form-group">
      <label for="City">City:</label>
      <input type="text" class="form-control" id="City" required="">
      </div>
      </div>
      <div class="row">
      <div class="col-sm-12">
      <div class="form-group">
      <label for="State">State:</label>
      <input type="text" class="form-control" id="State" required="">
      </div>
      </div>

</div>
</div>
<div class="container ">
  <div class="row">
      <div class="col-sm-4">
               <button type="button" class="btn btn-primary" onclick="save()">Submit</button>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
</form>
<script >
function save(){
    var firstname= document.getElementById("usrname").value;
    var lastname=document.getElementById("lusrname").value;
    var mail= document.getElementById("email").value;
    var phn=document.getElementById("Mobile").value;
    var addressline=document.getElementById("Address").value;
    var addressline1=document.getElementById("City").value;
    var addressline2=document.getElementById("State").value;
    alert("Name :"+firstname+lastname); 
    alert("Phone :"+phn);
    alert("Mail :"+mail );
    alert("Address:"+addressline);
    alert("City:"+addressline1);
    alert("State :"+addressline2);
    
    
  }
</script>
</body>
</html>
