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

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="index.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>



</head>
<body>
  <div>
    <div>
      <ul style="height: 68px; margin: 0;margin-right: 2%; display: flex; justify-content: space-between;">
        <div style="align-content: flex-start; display: flex;">
          

            <form style="margin-top: 1rem;"> 

              <input class="search-hover" name=""  placeholder="search here..." type="text" style="background-image: url('./img/icons8-search-64.png'); background-repeat: no-repeat; ">

            </form>

          </div>

          <div style=" align-content: flex-end;">



               <li class="headerlist"><a href="#" style="color: black;">Sign
               up</a></li>
               <li class="headerlist"><a href="#" style="color: black;">Login</a></li>

             </div>
           </ul>
         </div>
       </div>

          <div style="display: flex; justify-content: space-around; text-align: center;">
            <div>
            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
          </div>
            <div class="parent-button" style=""> 

                    <button class="accordion">
                     <h2 style="text-align: center;"><b> ASK A QUESTION   </b> </h2><br>
                     <h4 style="text-align: center;">No Absuive language</h4><br>
                    
                   </button>

                     <div class="panel">
                   <form action="indexphp.php" method="post">
                  <div class="form-group" style="width: 70%; margin: 10%; ">
                    <label for="exampleFormControlInput1"> Title</label>
                    <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="Enter title here..." style="border-radius: 20px;" >

                     <label for="exampleFormControlTextarea1">Question</label>
                      

                      <div id="wrapper">
                 <textarea id="text"  name="question" class="form-control" rows="3"  placeholder="Enter Your Question here..."  style="border-radius: 20px;"></textarea>
               <p id="bad_notice"></p>
                <input type="Submit" onclick="check_val();" value="Submit">
                  </div>
                  </div>



                       


                        </form></div></div></div>
                    </div>
            </div>
</div>

      <div style="margin: 40px;">
 <div id="accordion" role="tablist" aria-multiselectable="true" >
  <div class="card" style="border: none;">
    <div class="card-header" role="tab" id="headingOne" style="background-color: transparent; border: none;">
      <h5 class="mb-0" >
        <ul id="myUL">
          <li>
        <a  href=" #" style="margin-left: 6%;" id="myUL">Free Trial</a>
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne" style="background-color: transparent; color: black; border: none;">
          <img src="./img/icons8-circled-user-64.png" width="40px;" style="margin-right: 5px;">
          Can I get a free trial before I purchase?
        </a>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
      <div class="card-block" style="margin-left: 7%;">
        Yes. Anyone with a  Account can get one free, seven-day trial.
        During the free trial, you’ll have access to benefits including online play in compatible games more!
        Free trial automatically converts into a 1-month membership for 199/month, unless you turn off automatic renewal before the end of the free trial.


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
        <a href="#" style="margin-left: 6%; size: 20px;" >Membership</a>
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="background-color: transparent; color: black; border: none;">
          <img src="./img/icons8-circled-user-64.png" width="40px;" style="margin-right: 5px; ">
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
        <a href="#" style="margin-left: 6%; size: 20px;">Payment</a>
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="background-color: transparent; color: black; border: none;">
          <img src="./img/icons8-circled-user-64.png" width="40px;" style="margin-right: 5px;">
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
        <a href="#" style="margin-left: 6%; size: 20px;" >Vouchers</a>
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour" style="background-color: transparent; color: black; border: none;">
          <img src="./img/icons8-circled-user-64.png" width="40px;" style="margin-right: 5px; ">
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
    <div class="card-header" role="tab" id="headingFour" style="background-color: transparent; border:none;">
      <h5 class="mb-0">
        <ul id="myUL">
        <li>
        <a href="#" style="margin-left: 6%; size: 20px;" ><?php echo $title;?></a>
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour" style="background-color: transparent; color: black; border: none;">
          <img src="./img/icons8-circled-user-64.png" width="40px;" style="margin-right: 5px; ">
          <?php echo $question;?>
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


 <center>
    <footer style="background-color: black;" >
      <div style="display: flex; background-color: black; justify-content: space-around; padding-top: 40px; padding-bottom: 40px;">
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
