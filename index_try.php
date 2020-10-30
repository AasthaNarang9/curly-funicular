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
  <!-- Required meta tags -->
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



</head>
<body>
  

   <div>
    <div style="  background: linear-gradient(to right, #9ab6db 0%, #046c60 100%);
"
>
      <ul style="height: 68px; margin: 0;margin-right: 2%; display: flex; justify-content: space-between;">
        <div style="align-content: flex-start; display: flex;">
          <li class="headerlist" style="position: static; margin-bottom: 10px;"><a

            style="padding: 0;"><a href="index.php"></a></a></li>

            
          </div>

          <div style=" align-content: flex-end; font-family: Ralway; color: white;">



            <li class="headerlist"><button type="button"

              class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"

              style="background-color: transparent; border: 0; font-size: 2rem;  margin-top: 10%;"

              ;="">Home </button></li>

              <li class="headerlist"><button type="button"

              class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"

              style="background-color: transparent; border: 0; font-size: 2rem; padding: 0;padding-bottom: 0px;  margin-left: 40px; "

              ;="">About Us </button></li>

              <li class="headerlist"><button type="button"

              class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"

              style="background-color: transparent; border: 0; font-size: 2rem; padding: 0;padding-bottom: 0px;  margin-left: 50px; "

              ;="">Login </button></li>
            </div></ul></div>
              


          <div >
            <div  style="display: flex; justify-content: space-around; margin-left: 10%;">
              <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Search Here..." aria-label="Recipient's username" aria-describedby="basic-addon2" id="myInput" onkeyup="myFunction()" style="width: 60%; margin-top: 5%; height: 60%;">
              <div class="input-group-append" style="margin-top: 3%;">
                <button class="btn btn-outline-secondary" type="button"  style="margin-top: 6%;" ><img src="./img/icons8-search-64.png" style="width: 40%; margin-right: 40%; "></button>
              </div>
            </div>

           <!-- <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search here.." title="Type in a name" style=" margin-top: 3%; width: 40%; height: 5%;"> -->
             <h3 style=" margin-top: 4%; margin-left: 15%;" >OR</h3>
          
        <center>
         
           <p>
            <button class="btn btn-dark" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" style="margin-top: 4%; height: 50px; font-family: Ralway; color: white;">
              Ask A Question
            </button>

            
          </p>
          <div class="collapsing  " id="collapseExample" style=" justify-content: space-around; display: flex;" >
            <div class="card-body" >
              <form action="indexphp.php" method="post">
                  <div class="form-group " style="width: 300%; margin-left: 5%;" >
                    <label for="exampleFormControlInput1" > Title</label>
                    <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="Enter title here..." required="" style="border-radius: 2px; width: 25%; "  ><br><br>

                     <label for="exampleFormControlTextarea1" >Question</label>
                      

                      <div id="wrapper">
                 <textarea id="text"  name="question" class="form-control" rows="3"  placeholder="Enter Your Question here..." required="" style="border-radius: 2px; width: 25%; "></textarea>
               <p id="bad_notice"></p>
                <input type="Submit" class="btn btn-success" onclick="check_val();" value="Submit">
                  </div>
                </div>
              </form></div>
                <div style="width: 40%; margin-left: 25%;">
                <img src="./img/source.gif" style="width: 70%;">
              </div>
                  </div>

                  </div>
                  </center>
                  </div>

                  </div>     


                    
                         
                        
      <div style="margin: 40px;">
 <div id="accordion" role="tablist" aria-multiselectable="true"   >
  <div class="card" style="border: none;">
    <div class="card-header" role="tab" id="headingOne" style="background-color: transparent; border: none;">
      <h5 class="mb-0" >

        <ul id="myUL">
          <li>

        <a  href=" #" style="  background-color: transparent; border: none;" id="myUL" >Free Trial</a>
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne" style="background-color: transparent; color: black; border: none;">
         
          <img src="./img/icons8-circled-user-64.png" width="40px;" style="margin-right: 5px; margin-left:1%;">

          Can I get a free trial before I purchase? 
        </a>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
      <div class="card-block" style="margin-left: 7%;">
        Yes. Anyone with a  Account can get one free, seven-day trial.
        During the free trial, you’ll have access to benefits <br>including online play in compatible games more!
        Free trial automatically converts into a 1-month membership for 199/month,<br> unless you turn off automatic renewal before the end of the free trial.


      </div>
    </div>
  </div>
</div>
</li></ul>

  <div class="card" style="border: none;">
    <div class="card-header" role="tab" id="headingTwo" style="background-color: transparent; border:none;">
      <h5 class="mb-0">
        <ul id="myUL">
        <li>
        <a href="#" style=" size: 20px; background-color: transparent; border: none;" >Membership</a>
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="background-color: transparent; color: black; border: none;">
          <img src="./img/icons8-circled-user-64.png" width="40px;" style="margin-right: 5px; margin-left:1%;">
          Can I change from an Individual Membership to a Family Membership?
        </a>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" >
      <div class="card-block" style="margin-left: 7%;">
        You can purchase a Family Membership and set it for automatic renewal even if you have an active Individual Membership. This will turn off automatic renewal for your Individual Membership.

      However, your subscription terms won't be combined; your Individual Membership will remain active until the end of its term.
      </div>
    </div>
  </div>
</li></ul>
  <div class="card" style="background-color: transparent;border: none;">
    <div class="card-header" role="tab" id="headingThree" style="background-color: transparent;border: none;">
      <h5 class="mb-0">
        <ul id="myUL">
        <li>
        <a href="#" style=" size: 20px; background-color: transparent; border: none;">Payment</a>
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="background-color: transparent; color: black; border: none;">
          <img src="./img/icons8-circled-user-64.png" width="40px;" style="margin-right: 5px; margin-left:1%;">
          How do automatic renewal payments work?
        </a>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="card-block" style="margin-left: 7%;">
        If automatic renewal is set, the subscription amount will be deducted from your Nintendo Account funds within 48 hours before your subscription is set to expire.

        If you don't have sufficient Nintendo Account funds, the balance will be charged to the payment method (credit card or PayPal for Nintendo Account holders ages 18+) you selected when you purchased the membership.

    </div>
  </div>
</div>
  </li></ul>


  <div class="card" style="border: none;">
    <div class="card-header" role="tab" id="headingFour" style="background-color: transparent; border:none;">
      <h5 class="mb-0">
        <ul id="myUL">
        <li>
        <a href="#" style=" size: 20px; background-color: transparent; border: none;" >Vouchers</a>
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour" style="background-color: transparent; color: black; border: none;">
          <img src="./img/icons8-circled-user-64.png" width="40px;" style="margin-right: 5px; margin-left:1%;">
          How many vouchers can I buy?
        </a>
      </h5>
    </div>
    <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour" >
      <div class="card-block" style="margin-left: 7%;">
        You can buy as many as you like, but can only have eight unredeemed vouchers at one time.
      </div>
    </div>
  </div>
</li></ul>

<!-- Php -->
 <div class="card" style="border: none;">
    <div class="card-header" role="tab"  style="background-color: transparent; border:none;">
      <h5 class="mb-0">
        <ul id="myUL">
        <li>
        <a href="#" style=" size: 20px; background-color: transparent; border: none;" ><?php echo $title;?></a>
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion"  aria-expanded="false" aria-controls="collapseFour" style="background-color: transparent; color: black; border: none;">
          <img src="./img/icons8-circled-user-64.png" width="40px;" style="margin-right: 5px; margin-left:1%;">
          <?php echo $question;?>
        </a>
      </h5>
    </div>
    
  </div>
</li></ul>

<!-- End Php -->
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