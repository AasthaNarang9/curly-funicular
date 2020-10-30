<?php
session_start();
$servername = "localhost";
$dbname = "form";
$name="root";
$pass="";

// Create connection
$conn = mysqli_connect($servername,$name,$pass,$dbname);
// Check connect

if ($conn->connect_error) {
  die("Connection failed: " .$conn->connect_error);
}

$sql="Select * from ques ";
$result=$conn->query($sql);
if($result->num_rows > 0 )
{
  while($row =$result->fetch_assoc())
  {
    
    $title=$row['title'];
    $question=$row['question'];
   

  }
}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="index.css">
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="content-type" content="text/html; charset=windows-1252">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
       
   
    </body>
    <title>home page</title>
    <link rel="stylesheet" href ="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="index.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	<body>
		<div >
      <ul style="height: 68px; margin: 0;margin-right: 2%; display: flex; justify-content: space-between;">
        <div style="align-content: flex-start; display: flex;">
          <li class="headerlist" style="position: static; margin-bottom: 10px;"><a style="padding: 0;"><a href="index.php"></a></a></li>
          </div>
          <div style=" align-content: flex-end; font-family: Ralway; color: black;">
            <li class="headerlist"><button type="button"class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="background-color: transparent; border: 0; font-size: 2rem;  margin-top: 10%; color: black;">Home </button></li>

              <li class="headerlist"><button type="button"  class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="background-color: transparent; border: 0; font-size: 2rem; padding: 0;padding-bottom: 0px;  margin-left: 40px; color: black;">About Us </button></li>

              <li class="headerlist"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="background-color: transparent; border: 0; font-size: 2rem; padding: 0;padding-bottom: 0px;  margin-left: 50px; color: black;">Login </button></li>
            </div>
          </ul>
     </div>  
     
      
        <div class="container">
          <div class="conta-overlay" ></div>
       <img src="./img/bg3.png" > 
        <div class="centered">
       <input type="text" class="form-control" placeholder="Search Here..." aria-label="Recipient's username" aria-describedby="basic-addon2" id="myInput" onkeyup="myFunction()" style="width: 350% ; height: 40%; opacity: 0.9; font-family: Ralway; border-radius: 20px;  ">

       
     </div>     
     </div> 

         <p>
          <div style="margin-left: 20%; z-index: -10; margin-top: 25%;">
            <button class="btn btn-dark" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" style=" height: 60px; width:   300px; font-family: Ralway; color: white; z-index: -10; margin-left: 20%; border-radius: 30px;">
              Ask A Question
            </button>
          </p>
          <div class="collapse" id="collapseExample" style=" justify-content: space-around; display: flex;" >
            <div class="card-body" >
              <form action="indexphp.php" method="post">
                  <div class="form-group " style="width: 300%; margin-left: 5%;" >
                    <label for="exampleFormControlInput1" > Title</label>
                    <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="Enter title here..." required="" style="border-radius: 20px; width: 25%; "  ><br><br>

                     <label for="exampleFormControlTextarea1" >Question</label>
                      

                      <div id="wrapper">
                 <textarea id="text"  name="question" class="form-control" rows="3"  placeholder="Enter Your Question here..." required="" style="border-radius: 20px; width: 25%; "></textarea>
               <p id="bad_notice"></p>
                <input type="Submit" class="btn btn-success" onclick="check_val();" value="Submit" style="margin-left: 10%; border-radius: 30px;">
                  </div>
                </div>
              </form></div>
                <div style="width: 40%; margin-right:15%;">
                <img src="./img/source.gif" style="width: 70%;">
              </div>
              </div>
              </div>
    <div class="card" style="width: 90%; margin: 6%;  padding: 10px;  box-shadow: 5px 10px 18px #888888; ">
      <div class="card-body">

      <h3><a  href=" #" style="  background-color: transparent; border: none; color: black;" id="myUL" class="card-title"><img src="./img/user.png" width="50px;" style="margin-right: 15px; margin-left:1%;">Free Trial</a></h3>
        <p class="card-text" ><b><h4 style="color: #0A2341; margin-left: 8%;">Can I get a free trial before I purchase? </p></h4></b>
        <p class="card-text" style=" margin-left: 9%; padding: 5px;" >Yes. Anyone with a  Account can get one free, seven-day trial.
        During the free trial, you’ll have access to benefits including online play in compatible games more!
        Free trial automatically converts into a 1-month membership for 199/month, unless you turn off automatic renewal before the end of the free trial.</p>
      </div>
    </div>


    <div class="card" style="width: 90%; margin: 6%;  padding: 10px;  box-shadow: 5px 10px 18px #888888; ">
      <div class="card-body">

      <h3><a  href=" #" style="  background-color: transparent; border: none; color: black;" id="myUL" class="card-title"><img src="./img/user2.jpg" width="50px;" style="margin-right: 15px; margin-left:1%;">Membership</a></h3>
        <p class="card-text" ><b><h4 style="color: #0A2341; margin-left: 8%;">Can I change from an Individual Membership to a Family Membership? </p></h4></b>
        <p class="card-text" style=" margin-left: 9%; padding: 5px;" >You can purchase a Family Membership and set it for automatic renewal even if you have an active Individual Membership. This will turn off automatic renewal for your Individual Membership.
        However, your subscription terms won't be combined; your Individual Membership will remain active until the end of its term.</p>
      </div>
    </div>

    <div class="card" style="width: 90%; margin: 6%;  padding: 10px;  box-shadow: 5px 10px 18px #888888; ">
      <div class="card-body">

      <h3><a  href=" #" style="  background-color: transparent; border: none; color: black;" id="myUL" class="card-title"><img src="./img/user3.jpg" width="50px;" style="margin-right: 15px; margin-left:1%;">Payment</a></h3>
        <p class="card-text" ><b><h4 style="color: #0A2341; margin-left: 8%;">Can I change from an Individual  How do automatic renewal payments work? </p></h4></b>
        <p class="card-text" style=" margin-left: 9%; padding: 5px;" >If automatic renewal is set, the subscription amount will be deducted from your Nintendo Account funds within 48 hours before your subscription is set to expire.

        If you don't have sufficient Nintendo Account funds, the balance will be charged to the payment method (credit card or PayPal for Nintendo Account holders ages 18+) you selected when you purchased the membership.</p>
      </div>
    </div>

    <div class="card" style="width: 90%; margin: 6%;  padding: 10px;  box-shadow: 5px 10px 18px #888888; ">
      <div class="card-body">

      <h3><a  href=" #" style="  background-color: transparent; border: none; color: black;" id="myUL" class="card-title"><img src="./img/user4.jpg" width="50px;" style="margin-right: 15px; margin-left:1%;">Vouchers</a></h3>
        <p class="card-text" ><b><h4 style="color: #0A2341; margin-left: 8%;"> How many vouchers can I buy? </p></h4></b>
        <p class="card-text" style=" margin-left: 9%; padding: 5px;" >You can buy as many as you like, but can only have eight unredeemed vouchers at one time.</p>
      </div>
    </div>

    <div class="card" style="width: 90%; margin: 6%;  padding: 10px;  box-shadow: 5px 10px 18px #888888; ">
      <div class="card-body">

      <h3><a  href=" #" style="  background-color: transparent; border: none; color: black;" id="myUL" class="card-title"><img src="./img/user5.jpg" width="50px;" style="margin-right: 15px; margin-left:1%;"><?php echo $title;?></a></h3>
        <p class="card-text" ><b><h4 style="color: #0A2341; margin-left: 8%;"> <?php echo $question;?> </p></h4></b>

      </div>
    </div>
                    
<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>

<script type="text/javascript">
function check_val()
{
 var bad_words=new Array("death","kill","murder","stupid","dick","asshole","bitch","boobs","cock","cumming","fuck","fucker","fucking", "motherfucker","porn","phuck","shit","son-of-a-bitch","whore","slut");
 var check_text=document.getElementById("text").value;
 var error=0;
 for(var i=0;i<bad_words.length;i++)
 {
  var val=bad_words[i];
  if((check_text.toLowerCase()).indexOf(val.toString())>-1)
  {
   error=error+1;
  }
 }
  
 if(error>0)
 {
  document.getElementById("bad_notice").innerHTML="Your Question contains inappropriate words.!!";
 }
 else
 {
  document.getElementById("bad_notice").innerHTML="";
 }
}
</script>

<script>
function myFunction() {
  // Declare variables
  var input, filter, ul, li, a, i, txtValue;
  input = document.getElementById('myInput');
  filter = input.value.toUpperCase();
  ul = document.getElementById("myUL");
  li = ul.getElementsByTagName('li');

  // Loop through all list items, and hide those who don't match the search query
  for (i = 0; i < li.length; i++) {
    a = li[i].getElementsByTagName("a")[0];
    txtValue = a.textContent || a.innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      li[i].style.display = "";
    } else {
      li[i].style.display = "none";
    }
  }
}
</script>
</div>
 <center>
  <footer style="background-color: black;" >
    <div style="display: flex; background-color: black; justify-content: space-around; padding-top: 50px; padding-bottom: 50px;">
      <div>
        <ul class="footer-nav" id="ult">
          <li><a href="#">Explore</a></li>
          <li><br>
          </li>
          <br>
          <li><a href="#">Fund Us</a></li>
          <li><br>
          </li>
          <br>
          <li><a href="#">GoFundMe</a></li>

        </ul>
      </div>
      <div>
        <ul class="footer-nav" id="ult">
          <li><a href="proper.html">About us</a></li>
          <li><br>
          </li>
          <br>
          <li><a href="#">Help and Support</a></li>
          <li><br>
          </li>
          <br>
          <li><a href="#">Contact Us</a></li>

        </ul>
      </div>
      <div>
        <ul class="footer-nav" id="ult">
          <li><a href="#">How It Works</a></li>
          <li><br>
          </li>
          <br>
          <li><a href="#">Fees</a></li>
          <br>
          <br>
          <li><a href="#">Enterprise</a></li>

        </ul>
      </div>
    </div>
    <div>
      <img src=".\img\facebook.png" width="40px" class="footico">
      <img src=".\img\instagram.png" width="40px"class="footico">
      <img class="footico" src=".\img\icons8-linkedin-40.png" width="40px">
      <img class="footico" src=".\img\twitter.png" width="40px">
      <div>W I Z K L U B &copy<br><br>
        
      </div>
    </div>
  </footer>
</center>
</body>
</html>
     

	</body>
</head>
</html>