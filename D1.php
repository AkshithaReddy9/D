<!DOCTYPE html>
<html>
<head>
<title> Registration Form</title>
<link rel="stylesheet" type="text/css" href="D2.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
</head>

<body class="mx" ng-controller="studentController" class="container">
 <h2 class="center"> Student Registration Form </h2>
 <p style="text-align:center;"> (Fill the form carefully for registration) </p>

<form class="form-horizontal" ng-submit="submitStudnetForm()" id="registration" method='POST' action='D3.php' role="form">

<table>
       <div class="form-group">
<tr>
<td> <br>    <label for="User_Name" class="col-sm-7 control-label"><b>User_Name:</b></label>  </td>
             <div class="col-sm-5">
<td> <br>    <input type="text" placeholder="User_Name"  id="User_Name" class="form-control" ng-model="student.User_Name" name="user" required>  </td>
             </div>
             <div class="col-sm-33"></div>
</tr> 
       </div>



      <div class="form-group">
<tr>
<td> <br>   <label for="Last_Name" class="col-sm-5 control-label"><b>Last_Name:</b></label>  </td>
            <div class="col-sm-1.5">
<td> <br>   <input type="text" placeholder="Last_Name"  id="User_Name" class="form-control" ng-model="student.Last_Name" name="last" required>  </td>  
            </div>
            <div class="col-sm-3"></div>
</tr> 
       </div>



      <div class="form-group">
<tr>            
<td> <br>   <label for="gender" class="col-sm-3 control-label"><b>Gender:</b></label> <td> 
            <div class="col-sm-16">
     <br>   <input type="radio" name="Gender" required="required">Male
            <input type="radio" name="Gender" required="required">Female
            </div>
            <div class="col-sm-10"></div> 
</tr>
      </div>         



        <div class="form-group">
<tr>
<td>  <br>   <label for="Phone_num" class="col-sm-3 control-label"><b>Phone_num:</b></label>   </td>  
             <div class="col-sm-76"> 
<td>  <br>   <input type="Phone_num" placeholder="Phone_num" id="number" class="form-control" ng-model="student.Phone_num" name="num" required>   </td>
             </div>
             <div class="col-sm-23"></div> 
</tr>
        </div>
    
  

          <div class="form-group">
<tr>
<td> <br>   <label for="email" class="col-sm-3 control-label"><b>Email:</b></label>   </td>  
            <div class="col-sm-76">
<td> <br>   <input type="mail" placeholder="Enter Email" id="mail" class="form-control" ng-model="student.Email" name="mail" required>  </td>
            </div>
            <div class="col-sm-23"></div> 
</tr>
        </div>

    

          <div class="form-group">
<tr>
<td> <br>  <label for="Password" class="col-sm-3 control-label"><b>Password:</b></label>  </td> 
          <div class="col-sm-16">
<td> <br>  <input type="Password" placeholder="Password" id="" class="form-control" ng-model="student.Password" name="pwd" required>    </td>
          </div>
          <div class="col-sm-13"></div> 
</tr>
          </div>
    
</table>

    <div>
    <br><center>
    <input type="submit" value="Submit" name="signup_submit" class="btn btn-success col-md-offset-5" /> <br>
    </div>

</form>


</body>
</html>