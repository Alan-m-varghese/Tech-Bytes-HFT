<!DOCTYPE html>
<html>
<head>
<title>EduHub</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
</head>
<body>

<!-- Side Navigation -->
<nav class="w3-sidebar w3-bar-block w3-card w3-animate-left w3-center" style="display:none" id="mySidebar">
  <h1 class="w3-xxxlarge w3-text-theme"></h1>
  <button class="w3-bar-item w3-button" onclick="w3_close()"> <i class="fa fa-remove"></i></button>
  <a href="#" class="w3-bar-item w3-button">Academics</a>
  <a href="#" class="w3-bar-item w3-button">Profession</a>
  <a href="#" class="w3-bar-item w3-button">scholarships</a>

</nav>

<!-- Header -->
<header class="w3-container w3-theme w3-padding" id="myHeader">
  <i onclick="w3_open()" class="fa fa-bars w3-xlarge w3-button w3-theme"></i> 
  <div class="w3-center">
  <h4>Welcome</h4>
  <h1 class="w3-xxxlarge w3-animate-bottom"><b>EduHUB</b></h1>
    <div class="w3-padding-32">
      <button class="w3-btn w3-xlarge w3-dark-grey w3-hover-light-grey" style.display='block'" style="font-weight:900;">Get Started</button>
    </div>
  </div>
</header>

<!-- Modal -->
<div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-top">
      <header class="w3-container w3-theme-l1"> 
        <span onclick="document.getElementById('id01').style.display='none'"
        class="w3-button w3-display-topright">×</span>
       
      </header>
      
      <footer class="w3-container w3-theme-l1">
        <p>Modal footer</p>
      </footer>
    </div>
</div>

<div class="w3-row-padding w3-center w3-margin-top">
<div class="w3-third">
  <div class="w3-card w3-container" style="min-height:460px">
  <h3><u><b>Academics</b></u></h3></h3><br>
  <i class="fa fa-desktop w3-margin-bottom w3-text-theme" style="font-size:120px"></i>
  <p>Major Courses</p>
  <p>Minor Course</p>
  <p>Assignment</p>
  <p>Exams</p>
  </div>
</div>

<div class="w3-third">
  <div class="w3-card w3-container" style="min-height:460px">
  <h3><B><U>Profession</U></B></h3><br>
  <i class="fa fa-css3 w3-margin-bottom w3-text-theme" style="font-size:120px"></i>
  <p><B><U></U></B></p>
  <p>Internships</p>
  <p>Job offers</p>
  <p>Freelancing</p>
  <p>Mock Interviews</p>
  </div>
</div>

<div class="w3-third">
  <div class="w3-card w3-container" style="min-height:460px">
  <h3><b><u>Finance</u></b></h3><br>
  <i class="fa fa-diamond w3-margin-bottom w3-text-theme" style="font-size:120px"></i>
  <p>Scholarships</p>
  <p>Part-time jobs</p>
  <p></p>
  <p>Student loan</p>
  </div>
</div>
</div>

<div class="w3-container">
<hr>
<div class="w3-center">
  <h2><b><u>Grade Systems</u></b></h2>
</div>

<div class="w3-row">
  <div class="w3-col w3-container m2 w3-red"><p>S</p></div>
  <div class="w3-col w3-container m2 w3-blue"><p>A+</p></div>
  <div class="w3-col w3-container m2 w3-blue-grey"><p>A</p></div>
  <div class="w3-col w3-container m2 w3-teal"><p>B+</p></div>
  <div class="w3-col w3-container m2 w3-yellow"><p>B</p></div>
  <div class="w3-col w3-container m2 w3-orange"><p>FAIL</p></div>
</div>

<hr>
<br>
     
<div class="w3-center">
  <h2><B>Academics</B></h2>
</div>   

<header class="w3-container w3-blue-grey">
  <h2>Core Subject</h2>
</header>

<div class="w3-padding w3-white w3-display-container">
  <span onclick="this.parentElement.style.display='none'" class="w3-button w3-display-topright"><i class="fa fa-remove"></i></span>
  <li>C Programming</li>
  <li> Mathematics</li>
  <li> Chemistry</li>
  <li>Physics</li> 
  <li>Graphics</li>
  <li>Mechanics</li>
  <li>Electricals and Electronics</li>
  <li>Civil and Mechanical</li>
</div>

<footer class="w3-container w3-blue-grey">
  <h5>Non-Credit Subjects</h5>
  </footer>
  <li>Life skills</li>
  <li>Proffesional Communication</li>
<hr>

<div class="w3-container">
  <hr>
  <div class="w3-center">
    <h2><b>Internships</b></h2>
    <p w3-class="w3-large">Internships announced in last 30 days</p>
  </div>
<div class="w3-responsive w3-card-4">
<table class="w3-table w3-striped w3-bordered">
<thead>
<tr class="w3-theme">
  <th>Company</th>
  <th>Place</th>
  <th>duration</th>
  <th>Stipend</th>
</tr>
</thead>
<tbody>
<tr>
  <td>Paypal</td>
  <td>Banglore</td>
  <td>70 days</td>
  <td>12k/month</td>
</tr>
<tr class="w3-white">
  <td>Infosys</td>
  <td>Mumbai</td>
  <td>184 days</td>
  <td>10k/month</td>
</tr>
<tr>
  <td>synopsis</td>
  <td>Hyderabad</td>
  <td>243 days</td>
  <td>200k/month</td>
</tr>
</tbody>
</table>
</div>

<hr>
<h2 class="w3-center">Connect With Us</h2>
</div>

<div class="w3-row-padding">

<div class="w3-half">
<form class="w3-container w3-card-4">
  
  <div class="w3-section">    
    <input class="w3-input" type="text" required>
    <label>Name</label>
  </div>
  <div class="w3-section">      
    <input class="w3-input" type="text" required>
    <label>Email</label>
  </div>
  <div class="w3-section">      
    <input class="w3-input" type="text" required>
    <label>Subject</label><br><br>
    <input class="w3-input" type="submit" required>
  </div>

  
</form>
</div>

<br>

<br>
</div>
</div>
</div>
<hr>

<h2 class="w3-center">Progress Bars</h2>
<div class="w3-container">

<div class="w3-light-gray">
  <div id="myBar" class="w3-center w3-padding w3-theme" style="width:5%">17%</div>
</div><br>
<button class="w3-btn w3-theme" onclick="move()">Click Me</button> 
</div>
<hr>

<hr>
<h2 class="w3-center">Contact Us</h2>
<div class="w3-center">
  <br>
  <a class="w3-button w3-theme">Gmail</a>
  <a class="w3-button w3-theme">Linkedin</a>
  <a class="w3-button w3-theme-d3 w3-disabled">Telephone</a>
  <br><br>
  <a class="w3-button w3-circle w3-large w3-black"><i class="fa fa-plus"></i></a>
  <a class="w3-button w3-circle w3-large w3-theme"><i class="fa fa-plus"></i></a>  
  <a class="w3-button w3-circle w3-large w3-card-4"><i class="fa fa-plus"></i></a>
</div>
<br>
<div class="w3-center">
  <div class="w3-dropdown-hover">
    <button class="w3-button w3-theme">Dropdown <i class="fa fa-caret-down"></i></button>
    <div class="w3-dropdown-content w3-bar-block w3-border">
      <a href="#" class="w3-bar-item w3-button">Home</a>
      <a href="#" class="w3-bar-item w3-button">Academics</a>
      <a href="#" class="w3-bar-item w3-button">Profession</a>
    </div>
  </div>
</div>

</div>

<hr>
<div class="w3-center">
  <h2>Pagination</h2>
  <!-- Pagination -->
  <div class="w3-center w3-padding-32">
    <div class="w3-bar">
      <a href="#" class="w3-bar-item w3-button w3-hover-theme">«</a>
      <a href="#" class="w3-bar-item w3-button w3-theme w3-hover-theme">1</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-theme">2</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-theme">3</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-theme">4</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-theme">5</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-theme">»</a>
    </div>
  </div>
</div>
<br>

<!-- Footer -->
<footer class="w3-container w3-theme-dark w3-padding-16">
  <h3>EduHUB</h3>
  <p>Powered by >>Tech Bytes</a></p>
  <div style="position:relative;bottom:55px;" class="w3-tooltip w3-right">
    <span class="w3-text w3-theme-light w3-padding">Go To Top</span>    
    <a class="w3-text-white" href="#myHeader"><span class="w3-xlarge">
    <i class="fa fa-chevron-circle-up"></i></span></a>
  </div>
 
</footer>

<!-- Script for Sidebar, Tabs, Accordions, Progress bars and slideshows -->
<script>
// Side navigation
function w3_open() {
  var x = document.getElementById("mySidebar");
  x.style.width = "100%";
  x.style.fontSize = "40px";
  x.style.paddingTop = "10%";
  x.style.display = "block";
}
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}

// Tabs
function openCity(evt, cityName) {
  var i;
  var x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  var activebtn = document.getElementsByClassName("testbtn");
  for (i = 0; i < x.length; i++) {
    activebtn[i].className = activebtn[i].className.replace(" w3-dark-grey", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " w3-dark-grey";
}

var mybtn = document.getElementsByClassName("testbtn")[0];
mybtn.click();

// Accordions
function myAccFunc(id) {
  var x = document.getElementById(id);
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}

// Slideshows
var slideIndex = 1;

function plusDivs(n) {
  slideIndex = slideIndex + n;
  showDivs(slideIndex);
}

function showDivs(n) {
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length} ;
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}

showDivs(1);

// Progress Bars
function move() {
  var elem = document.getElementById("myBar");   
  var width = 5;
  var id = setInterval(frame, 10);
  function frame() {
    if (width == 100) {
      clearInterval(id);
    } else {
      width++; 
      elem.style.width = width + '%'; 
      elem.innerHTML = width * 1  + '%';
    }
  }
}
</script>

</body>
</html>
