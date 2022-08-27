

<style>
  @import url('https://fonts.googleapis.com/css?family=Varela+Round');

  html,
  body {
    overflow-x: hidden;
    height: 100%;
  }

  body {
    background: #fff;
    padding: 0;
    margin: 0;
    font-family: 'Varela Round', sans-serif;
  }

  .header {
    display: block;
    margin: 0 auto;
    width: 100%;
    max-width: 100%;
    box-shadow: none;
    background-color: #FC466B;
    position: fixed;
    height: 60px !important;
    overflow: hidden;
    z-index: 10;
  }

  .main {
    margin: 0 auto;
    display: block;
    height: 100%;
    margin-top: 60px;
  }

  .mainInner {
    display: table;
    height: 100%;
    width: 100%;
    text-align: center;
  }

  .mainInner div {
    display: table-cell;
    vertical-align: middle;
    font-size: 3em;
    font-weight: bold;
    letter-spacing: 1.25px;
  }

  #sidebarMenu {
    height: 100%;
    /* position: fixed; */
    left: 0;
    width: 250px;
    /* margin-top: 60px; */
    transform: translateX(-250px);
    transition: transform 250ms ease-in-out;
    background: linear-gradient(180deg, #FC466B 0%, #3F5EFB 100%);
  }

  .sidebarMenuInner {
    margin: 0;
    padding: 0;
    border-top: 1px solid rgba(255, 255, 255, 0.10);
  }

  .sidebarMenuInner li {
    list-style: none;
    color: #fff;
    text-transform: uppercase;
    font-weight: bold;
    padding: 20px;
    cursor: pointer;
    border-bottom: 1px solid rgba(255, 255, 255, 0.10);
  }

  .sidebarMenuInner li span {
    display: block;
    font-size: 14px;
    color: rgba(255, 255, 255, 0.50);
  }

  .sidebarMenuInner li a {
    color: #fff;
    text-transform: uppercase;
    font-weight: bold;
    cursor: pointer;
    text-decoration: none;
    font-size: 11px;
  }

  input[type="checkbox"]:checked~#sidebarMenu {
    transform: translateX(0);
  }

  input[type=checkbox] {
    transition: all 0.3s;
    box-sizing: border-box;
    /* display: none; */
  }

  .sidebarIconToggle {
    transition: all 0.3s;
    box-sizing: border-box;
    cursor: pointer;
    position: absolute;
    z-index: 99;
    height: 100%;
    width: 100%;
    top: 22px;
    left: 15px;
    height: 22px;
    width: 22px;
  }

  .spinner {
    transition: all 0.3s;
    box-sizing: border-box;
    position: absolute;
    height: 3px;
    width: 100%;
    background-color: #fff;
  }

  .horizontal {
    transition: all 0.3s;
    box-sizing: border-box;
    position: relative;
    float: left;
    margin-top: 3px;
  }

  .diagonal.part-1 {
    position: relative;
    transition: all 0.3s;
    box-sizing: border-box;
    float: left;
  }

  .diagonal.part-2 {
    transition: all 0.3s;
    box-sizing: border-box;
    position: relative;
    float: left;
    margin-top: 3px;
  }

  input[type=checkbox]:checked~.sidebarIconToggle>.horizontal {
    transition: all 0.3s;
    box-sizing: border-box;
    opacity: 0;
  }

  input[type=checkbox]:checked~.sidebarIconToggle>.diagonal.part-1 {
    transition: all 0.3s;
    box-sizing: border-box;
    transform: rotate(135deg);
    margin-top: 8px;
  }

  input[type=checkbox]:checked~.sidebarIconToggle>.diagonal.part-2 {
    transition: all 0.3s;
    box-sizing: border-box;
    transform: rotate(-135deg);
    margin-top: -9px;
  }
</style>

<style>
  /* Style The Dropdown Button */
  .dropbtn {
    background-color: #00000000;
    /* color: white; */
    padding: 2px;
    font-size: 16px;
    border: none;
    cursor: pointer;
    /* width: 200%; */
  }

  /* The container <div> - needed to position the dropdown content */
  .dropdown {
    position: relative;
    display: inline-block;
  }

  /* Dropdown Content (Hidden by Default) */
  .dropdown-content {
    display: none;
    position: absolute;
    background-color: #020202;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    z-index: 1;
    /* width: 200%; */
  }

  /* Links inside the dropdown */
  .dropdown-content a {
    color: black;
    padding: 12px 25px;
    text-decoration: none;
    display: block;
    box-shadow: 10px 18px 16px 10px rgba(0, 0, 0, 0.2);

  }

  /* Change color of dropdown links on hover */
  .dropdown-content a:hover {
    background-color: #00000000;
    
  }

  /* Show the dropdown menu on hover */
  .dropdown:hover .dropdown-content {
    display: block;
  }

  /* Change the background color of the dropdown button when the dropdown content is shown */
  .dropdown:hover .dropbtn {
    background-color:  #00000000;
  }
</style>


<input type="checkbox" class="openSidebarMenu" id="openSidebarMenu" style="display: none;">
<label for="openSidebarMenu" class="sidebarIconToggle">
  <div class="spinner diagonal part-1"></div>
  <div class="spinner horizontal"></div>
  <div class="spinner diagonal part-2"></div>
</label>
<div id="sidebarMenu">
  <ul class="sidebarMenuInner">
  
  <li>
  <a href='<?php echo base_url() . "index.php/Users/index"; ?>'>
   <button class="dropbtn">Home</button> </a>  </li>


  <!-- <li>
 
        <a href='<?php echo base_url() . "index.php/school_students/add"; ?>'>Add New Vehical </a>
      
    </li>
    <li>
        <a href='<?php echo base_url() . "index.php/school_class/class_c"; ?>'>View Bookings</a> 
        
    </li> -->
   
  </ul>
</div>