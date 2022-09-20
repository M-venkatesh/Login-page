<!DOCTYPE html>
<?php 
session_start();
if(!isset($_SESSION['username'])) {
     header("Location: index.php");
}


?>


<html lang="en">
<head>
    <title>Student details form</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  
</head>
<body style="background-color:#e1fbfc">
<div class="container">
  <h2 style="text-align:center">Enter Student details</h2>
  <form class="form-vertical" action="studentdetails.php" method="post">


  <div class="form-group">
      <label for="rollno">Roll Number:</label>
      <input type="text" class="form-control" id=" rollno" value='<?php echo $_SESSION['roll']; ?>' name="rollno" >
    </div>


    <div class="form-group">
      <label for="stname">Name:</label>
      <input type="text" class="form-control" id="stname" value='<?php echo $_SESSION['stuname']; ?>' name="stname" >
    </div>


   


    <div class="form-group">
      <label for="stclass">Class:</label>
      <input type="number" class="form-control" id="stclass" value='<?php echo $_SESSION['class']; ?>' name="stclass" >
    </div>


    <div class="form-group">
      <label for="stschool">School:</label>
      <input type="text" class="form-control" id="stschool" value='<?php echo $_SESSION['school']; ?>' name="stschool" >
    </div>


    <div class="form-group">
      <label for="age">Age:</label>
      <input type="number" class="form-control" id="age" placeholder="Enter Age of the Student" name="age" required>
    </div>


    <div >
      <label for="gen">Gender: (Select 'M' - Male  , 'F' - Female  , 'O' - others )</label> &nbsp &nbsp
    <label class="radio-inline">
      <input type="radio" name="gen" value="M">Male
    </label>
    <label class="radio-inline">
      <input type="radio" name="gen"value="F">Female
    </label>
    <label class="radio-inline">
      <input type="radio" name="gen" value="O">Others
    </label>
    </div>


    <div title="(student's home address type-'urban' or 'rural')"><br>
      <label for="atype">Address (Student's home address type):</label> &nbsp &nbsp
    <label class="radio-inline">
      <input type="radio" name="atype" value='U'>URBAN
    </label>
    <label class="radio-inline">
      <input type="radio" name="atype" value='R'>RURAL
    </label>
    </div>
    <br>


    <div title='"LE3" - lesser or equal to 3 or "GT3" - greater than 3'>
    <label for="fsize">Family Size (Select "LE3" - lesser or equal to 3 or "GT3" - greater than 3):</label>
    &nbsp &nbsp
    <label class="radio-inline">
      <input type="radio" name="fsize" value="LE3">Lesser or Equal to 3 
    </label>
    <label class="radio-inline">
      <input type="radio" name="fsize" value="GT3">Greater than 3
    </label>
    </div>
    <br>

    <div title="parent's cohabitation status ('Yes' - living together or 'No' - apart)">
    <label for="pstat">Parental status :</label> &nbsp &nbsp
    <label class="radio-inline">
      <input type="radio" name="pstat" value='T'>T(Living Together)
    </label>
    <label class="radio-inline">
      <input type="radio" name="pstat" value='A'>A(Apart)
    </label>
    </div><br>


    <div title="Select Mother's Education based on the scale provided">
    <div class="form-group">
      <label for="medu">Mother's Education:</label>
      <select class="form-control" id="medu" name="medu" required>
        <option>CHOOSE A VALUE BASED ON MOTHER'S EDUCATION : 0 -none , 1 - primary Education(4th grade) , 2 - 5th to 9th grade ,3 - secondary education , 4 - higher education </option>
        <option>0</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
      </select>
    </div>
    </div><br>

    
    <div title="Select Father's Education based on the scale provided">
    <div class="form-group">
      <label for="fedu">Father's Education:</label>
      <select class="form-control" id="fedu" name="fedu" required>
        <option>CHOOSE A VALUE BASED ON FATHER'S EDUCATION : 0 -none , 1 - primary Education(4th grade) , 2 - 5th to 9th grade ,3 - secondary education , 4 - higher education </option>
        <option>0</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
      </select>
    </div>
    </div><br>
    

    <div title='(nominal: "teacher", "health" care related, civil "services" (e.g. administrative or police), "at_home" or "other"'>
    <div class="form-group">
      <label for="mjob">Mother's Job:</label>
      <select class="form-control" id="mjob" name="mjob" required>
        <option>SELECT AN OPTION</option>
        <option>Teacher</option>
        <option>Health</option>
        <option>Services</option>
        <option>at_home</option>
        <option>other</option>
      </select>
    </div>
    </div><br>


    <div title='(nominal: "teacher", "health" care related, civil "services" (e.g. administrative or police), "at_home" or "other"'>
    <div class="form-group">
      <label for="fjob">Father's Job:</label>
      <select class="form-control" id="fjob" name="fjob" required>
        <option>SELECT AN OPTION</option>
        <option>Teacher</option>
        <option>Health</option>
        <option>Services</option>
        <option>at_home</option>
        <option>other</option>
      </select>
    </div>
    </div><br>



    <div title='(nominal: "teacher", "health" care related, civil "services" (e.g. administrative or police), "at_home" or "other"'>
    <div class="form-group">
      <label for="reas">Reason:</label>
      <select class="form-control" id="reas" name="reas" required>
        <option> Reason to choose this school ( close to "home", school "reputation", "course" preference or "other")</option>
        <option>home</option>
        <option>reputataion</option>
        <option>course</option>
        <option>other</option>
      </select>
    </div>
    </div><br>


    <div title="student's guardian (nominal: 'mother', 'father' or 'other')">
    <label for="guard">Student's guardian :</label> &nbsp &nbsp
    <label class="radio-inline">
      <input type="radio" name="guard" value="mother">mother
    </label>
    <label class="radio-inline">
      <input type="radio" name="guard" value="father">father
    </label>
    <label class="radio-inline">
      <input type="radio" name="guard" value="other">other
    </label>
    </div><br>



    <div title='Home to school travel time (numeric: 1 - less than 15 min., 2 - 15 to 30 min., 3 - 30 min. to 1 hour, or 4 - greater than 1 hour)'>
    <div class="form-group">
      <label for="travel">Travel Time:</label>
      <select class="form-control" id="travel"name="travel" required>
        <option> Home to school travel time (numeric: 1 - less than 15 min., 2 - 15 to 30 min., 3 - 30 min. to 1 hour, or 4 - greater than 1 hour)</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
      </select>
    </div>
    </div><br>


    <div title='studytime - weekly study time (numeric: 1 - <2 hours, 2 - 2 to 5 hours, 3 - 5 to 10 hours, or 4 - >10 hours)'>
    <div class="form-group">
      <label for="stutime">Study Time:</label>
      <select class="form-control" id="stutime" name="stutime" required>
        <option> studytime - weekly study time (numeric: 1 - less than 2 hours, 2 - 2 to 5 hours, 3 - 5 to 10 hours, or 4 - greater than 10 hours)</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
      </select>
    </div>
    </div><br>


    <div title='failures - number of past class failures (numeric: n if 1<=n<3, else 4)'>
    <div class="form-group">
      <label for="fail">Past Failures</label>
      <select class="form-control" id="fail" name="fail" required>
        <option>failures - number of past class failures (numeric: if n < 4 enter "n", else enter 4 )</option>
        <option>0</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
      </select>
    </div>
    </div><br>



    <div title="schoolsup - extra educational support (binary: yes or no)">
    <label for="ssup">Extra Educational Support :</label> &nbsp &nbsp
    <label class="radio-inline">
      <input type="radio" name="ssup" value="yes">Yes
    </label>
    <label class="radio-inline">
      <input type="radio" name="ssup" value="no">No
    </label>
    </div><br>


    <div title="famsup - family educational support (binary: yes or no)">
    <label for="fsup">Family Educational Support :</label> &nbsp &nbsp
    <label class="radio-inline">
      <input type="radio" name="fsup" value="yes">Yes
    </label>
    <label class="radio-inline">
      <input type="radio" name="fsup" value="no">No
    </label>
    </div><br>


    <div title="paid - extra paid classes within the course subject  (binary: yes or no)">
    <label for="excls">Extra Classes :</label> &nbsp &nbsp
    <label class="radio-inline">
      <input type="radio" name="excls" value="yes">Yes
    </label>
    <label class="radio-inline">
      <input type="radio" name="excls" value="no">No
    </label>
    </div><br>



    <div title="activities - extra-curricular activities (binary: yes or no)">
    <label for="exact">Extra Curricular activities :</label> &nbsp &nbsp
    <label class="radio-inline">
      <input type="radio" name="exact" value="yes">Yes
    </label>
    <label class="radio-inline">
      <input type="radio" name="exact" value="no">No
    </label>
    </div><br>



    <div title="nursery - attended nursery school (binary: yes or no)">
    <label for="nursery">Attended Nursery School :</label> &nbsp &nbsp
    <label class="radio-inline">
      <input type="radio" name="nursery" value="yes">Yes
    </label>
    <label class="radio-inline">
      <input type="radio" name="nursery" value="no">No
    </label>
    </div><br>


    
    <div title="higher - wants to take higher education (binary: yes or no)">
    <label for="higher">Interested for Higher Studies :</label> &nbsp &nbsp
    <label class="radio-inline">
      <input type="radio" name="higher" value="yes">Yes
    </label>
    <label class="radio-inline">
      <input type="radio" name="higher" value="no">No
    </label>
    </div><br>




    <div title="internet - Internet access at home ( yes or no)">
    <label for="internet"> Internet access at home :</label> &nbsp &nbsp
    <label class="radio-inline">
      <input type="radio" name="internet" value="yes">Yes
    </label>
    <label class="radio-inline">
      <input type="radio" name="internet" value="no">No
    </label>
    </div><br>




    <div title='family relations - quality of family relationships (numeric: from 1 - very bad to 5 - excellent)'>
    <div class="form-group">
      <label for="famrel">Family relations </label>
      <select class="form-control" id="famrel" name="famrel" required>
        <option>Quality of family relationships (numeric: 1 - very bad, 2 - bad , 3 - average , 4 - Above average  5 - excellent)</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
      </select>
    </div>
    </div><br>





    <div title='freetime - free time after school (numeric: from 1 - very low to 5 - very high)'>
    <div class="form-group">
      <label for="freetime">Free Time after School </label>
      <select class="form-control" id="freetime" name="freetime" required>
        <option>Numeric: 1 - very low, 2 - low , 3 - moderate , 4 - high  5 - very high</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
      </select>
    </div>
    </div><br>



    <div title='Going out with friends (numeric: from 1 - very low to 5 - very high)'>
    <div class="form-group">
      <label for="goout">Going out with friends</label>
      <select class="form-control" id="goout" name="goout" required>
        <option>Numeric: 1 - very low, 2 - low , 3 - moderate , 4 - high  5 - very high</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
      </select>
    </div>
    </div><br>


    <div title='Health Status (numeric: from 1 - very low to 5 - very high)'>
    <div class="form-group">
      <label for="hstatus">Health Status</label>
      <select class="form-control" id="hstatus" name="hstatus" required>
        <option>Numeric: 1 - very bad, 2 - bad , 3 - average , 4 - Good  5 - very Good</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
      </select>
    </div>
    </div><br>

    <div class="form-group">
      <label for="absence">Number of Absences:</label>
      <input type="number" class="form-control" id="absence" placeholder="Number of school absences (numeric: from 0 to 93)" name="absence">
    </div>




    <div title="passed - did the student pass the final exam (binary: yes or no)">
    <label for="pass">Pass Status :</label> &nbsp &nbsp
    <label class="radio-inline">
      <input type="radio" name="pass" value="yes">Yes
    </label>
    <label class="radio-inline">
      <input type="radio" name="pass" value="no">No
    </label>
    </div><br>




    <button style="margin-left:40%" type="submit" class="btn btn-success" name="submit">PREDICT</button>
  </form>
</div>
    
</body>
</html>


<?php

$connect=mysqli_connect("localhost","root","","faculty");
if(isset($_POST["submit"])){
if(!empty($_POST["stname"]) && !empty($_POST["rollno"]) && !empty($_POST["stclass"]) && !empty($_POST["stschool"]) &&
!empty($_POST["age"]) && !empty($_POST["gen"]) && !empty($_POST["atype"]) && !empty($_POST["fsize"]) &&   
!empty($_POST["pstat"]) && !empty($_POST["medu"]) && !empty($_POST["fedu"]) && !empty($_POST["mjob"]) &&
!empty($_POST["fjob"]) && !empty($_POST["reas"]) && !empty($_POST["guard"]) && !empty($_POST["travel"]) &&
!empty($_POST["stutime"]) && !empty($_POST["fail"]) && !empty($_POST["ssup"]) && !empty($_POST["fsup"]) &&
!empty($_POST["excls"]) && !empty($_POST["exact"]) && !empty($_POST["nursery"]) && !empty($_POST["higher"]) && !empty($_POST["internet"]) &&
!empty($_POST["famrel"]) && !empty($_POST["freetime"]) && !empty($_POST["goout"]) && !empty($_POST["hstatus"]) &&
!empty($_POST["absence"]) && !empty($_POST["pass"]))
{
    $rollno=$_SESSION["roll"];
    $stname=$_SESSION["stuname"];
    $stclass=$_SESSION["class"];
    $stschool=$_SESSION["school"];
    $age=$_POST["age"];
    $gen=$_POST["gen"];
    $atype=$_POST["atype"];
    $fsize=$_POST["fsize"];
    $pstat=$_POST["pstat"];
    $medu=$_POST["medu"];
    $fedu=$_POST["fedu"];
    $mjob=$_POST["mjob"];
    $fjob=$_POST["fjob"];
    $reas=$_POST["reas"];
    $guard=$_POST["guard"];
    $travel=$_POST["travel"];
    $stutime=$_POST["stutime"];
    $fail=$_POST["fail"];
    $ssup=$_POST["ssup"];
    $fsup=$_POST["fsup"];
    $excls=$_POST["excls"];
    $exact=$_POST["exact"];
    $nursery=$_POST["nursery"];
    $higher=$_POST["higher"];
    $internet=$_POST["internet"];
    $famrel=$_POST["famrel"];
    $freetime=$_POST["freetime"];
    $goout=$_POST["goout"];
    $hstatus=$_POST["hstatus"];
    $absence=$_POST["absence"];
    $pass=$_POST["pass"];
    $query="insert into studentdet values('$rollno','$stname','$stclass','$stschool','$age','$gen','$atype','$fsize','$pstat','$medu','$fedu','$mjob','$fjob','$reas','$guard','$travel','$stutime','$fail','$ssup','$fsup','$excls','$exact','$nursery','$higher','$internet','$famrel','$freetime','$goout','$hstatus','$absence','$pass')";
    $run=mysqli_query($connect,$query) ;
    if($run){
      echo "<script>alert('Student details entered succesfully')</script>";
    }
    else{
      echo mysqli_error($connect);
  }
}
else{
  echo "<script>alert('All Fields Required')</script>";
}
}


?>