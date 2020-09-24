<?php

	require_once('C:/xampp/htdocs/Summer_2020_WebTech/Final_Project/php/sessionController.php');	
?>

<html>
  <title>Home</title>
  <style>
    body {
      margin: 0;
      font-family: sans-serif;
      background-color: rgb(255, 255, 255);
    }
    .container {
      padding: 250px;
      background: rgb(255, 255, 255);
      display: flex;
      flex-direction: row;
      justify-content: space-evenly;
    }

    .box {
      width: 500px;
      height: 300px;
      background: rgba(88, 133, 157, 0.638);
      margin: 10px 10px;
      transition: 1s;
      border-radius: 5%;
      text-align: center;
    }
    .box:hover {
      transform: scale(1);
      background: #3163a5;
      z-index: 1;
      box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);
    }
    .container .box a {
      display: inline-block;
      padding: 10px 20px;
      background: #fff;
      border-radius: 50px;
      color: rgb(10, 10, 10);
      text-decoration: none;
      font-weight: 50;
      box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);
    }
    a {
      color: rgb(155, 46, 46);
    }

    /* header */

    .header {
      background-color: #fff;
      box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);
      position: fixed;
      width: 100%;
      z-index: 3;
    }

    .header ul {
      margin: 0;
      padding: 0;
      list-style: none;
      overflow: hidden;
      background-color: #fff;
    }

    .header li a {
      display: block;
      padding: 20px 20px;
      border-right: 1px solid #f4f4f4;
      text-decoration: none;
    }

    .header li a:hover,
    .header .menu-btn:hover {
      background-color: #f4f4f4;
    }

    .header .logo {
      display: block;
      float: left;
      font-size: 2em;
      padding: 10px 20px;
      text-decoration: none;
    }

    /* menu */

    .header .menu {
      clear: both;
      max-height: 0;
      transition: max-height 0.2s ease-out;
    }

    /* menu icon */

    .header .menu-icon {
      cursor: pointer;
      float: right;
      padding: 28px 20px;
      position: relative;
      user-select: none;
    }

    .header .menu-icon .nav-icon {
      background: #333;
      display: block;
      height: 2px;
      position: relative;
      transition: background 0.2s ease-out;
      width: 18px;
    }

    .header .menu-icon .nav-icon:before,
    .header .menu-icon .nav-icon:after {
      background: #333;
      content: "";
      display: block;
      height: 100%;
      position: absolute;
      transition: all 0.2s ease-out;
      width: 100%;
    }

    .header .menu-icon .nav-icon:before {
      top: 5px;
    }

    .header .menu-icon .nav-icon:after {
      top: -5px;
    }

    /* menu btn */

    .header .menu-btn {
      display: none;
    }

    .header .menu-btn:checked ~ .menu {
      max-height: 240px;
    }

    .header .menu-btn:checked ~ .menu-icon .nav-icon {
      background: transparent;
    }

    .header .menu-btn:checked ~ .menu-icon .nav-icon:before {
      transform: rotate(-45deg);
      top: 0;
    }

    .header .menu-btn:checked ~ .menu-icon .nav-icon:after {
      transform: rotate(45deg);
      top: 0;
    }

   

   
    
  </style>
  <body>
    <header class="header">
      <a href="/" class="logo">niloy</a>
      <input class="menu-btn" type="checkbox" id="menu-btn" />
      <label class="menu-icon" for="menu-btn"
        ><span class="nav-icon"></span
      ></label>
      <ul class="menu">
       
        <li><a href="../views/login.php">SignOut</a></li>
      </ul>
    </header>
  </body>
  <div class="container">
    
    <div class="box">
      <h2>Student & Organization</h2>
      <p>Here you can show StudentInfo and Organization detail</p>

      <a href="../../Final_Project/views/guardianAddStudent.php">Go</a>
    </div>
    <div class="box">
      <h2>Payment</h2>
      <p>Here you can do your Payment</p>
      <a href="../../Final_Project/views/payment.html">Go</a>
    </div>
  </div>
</html>
