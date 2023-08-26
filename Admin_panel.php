<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    h1 {
  background-color: black;
  color: white;
}
body {
  font-family: "Lato", sans-serif;
  background-color:lightgrey;
}
.sidebar {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  /* background-color: #008080; */
  background-color: #183b56;

  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidebar a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: white;
  display: block;
  transition: 0.3s;
}

.sidebar a:hover {
  color: blue;
}

.sidebar .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

.openbtn {
  font-size: 20px;
  cursor: pointer;
  background-color: green;
  color: white;
  padding: 10px 15px;
  border: none;
}

.openbtn:hover {
  background-color:darkblue;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}
.img{
    border-radius: 8px;
    display: block;
  margin-left 15px;;
  margin-right: 15px;
  width: 30%;
}
@import url("https://fonts.googleapis.com/css2?family=Lato&display=swap");

html {
  font-size: 62.5%;
}

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: "Lato", sans-serif;
/*   background: #272727; */
  color: #183b56;
  display: flex;
  justify-content: center;
  align-items: top;
  height: 100vh;
}

.display-date {
  text-align: center;
  margin-bottom: 10px;
  font-size: 1.6rem;
  font-weight: 600;
}

.display-time {
  display: flex;
  font-size: 25px;
  font-weight: bold;
  border: 2px solid #444;
  padding: 5px 8px;
  border-radius: 5px;
  transition: ease-in-out 0.1s;
  transition-property: background, box-shadow, color;
  -webkit-box-reflect: below 2px
    linear-gradient(transparent, rgba(255, 255, 255, 0.05));
}


</style>
</head>
<body>
<!-- <h1 align="center" style="background-color:black;">Admin panel </h1>   -->
<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">close ×</a>
  <a href="#">Home</a>
  <a href="Donor_Details.php">Donor</a>
  <a href="Volunteer_Details.php">Volunteers</a>
  <a href="Beneficiary_Details.php">Beneficiary</a>
  <a href="Approval_Request.php">New Requests</a>
</div>

<div id="main">
<h1 align="center" style="background-color:#183b56;color:white;font-size:60px;">Admin panel </h1><br>
  <button class="openbtn" onclick="openNav()">☰ Open Sidebar</button>  
  <!-- <p style="font-size:50PX;">Welcome Back</h2> -->
  <h3 style="font-size:3vw; color:#183b56;text-align:center;">"FOOD FOR CHARITY "</h2>
  <div class="img">
  <img src="https://serudsindia.org/wp-content/uploads/2018/07/3.png"></div>
  <h3 style="font-size:35px; color:#183b56">“Be the change you want to see in the world.” Mahatma Gandhi.</h3>
</div>
<div class="container">
      <div class="display-date">
        <span id="day">day</span>,
        <span id="daynum">00</span>
        <span id="month">month</span>
        <span id="year">0000</span>
      </div>
      <div class="display-time"></div>
    </div>
<script>
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
const displayTime = document.querySelector(".display-time");
// Time
function showTime() {
  let time = new Date();
  displayTime.innerText = time.toLocaleTimeString("en-US", { hour12: false });
  setTimeout(showTime, 1000);
}

showTime();

// Date
function updateDate() {
  let today = new Date();

  // return number
  let dayName = today.getDay(),
    dayNum = today.getDate(),
    month = today.getMonth(),
    year = today.getFullYear();

  const months = [
    "January",
    "February",
    "March",
    "April",
    "May",
    "June",
    "July",
    "August",
    "September",
    "October",
    "November",
    "December",
  ];
  const dayWeek = [
    "Sunday",
    "Monday",
    "Tuesday",
    "Wednesday",
    "Thursday",
    "Friday",
    "Saturday",
  ];
  // value -> ID of the html element
  const IDCollection = ["day", "daynum", "month", "year"];
  // return value array with number as a index
  const val = [dayWeek[dayName], dayNum, months[month], year];
  for (let i = 0; i < IDCollection.length; i++) {
    document.getElementById(IDCollection[i]).firstChild.nodeValue = val[i];
  }
}

updateDate();

</script>
   
</body>
</html> 
