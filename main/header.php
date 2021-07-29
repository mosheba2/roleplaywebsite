
<header>
<div class="serverlogo">
<img SRC=<?php getdata('logo');?> ALT="some text" WIDTH=110 HEIGHT=73>
</div>
<hr>
<nav class="menu">
    <ul class="menu cf">
        <li><a href="../index.php">Home</a></li>
        <li><a href="../departments/departments.php">Departments</a></li>
        <li><a href="../departments/applications.php">Appilcations</a></li>
        <li><a href=<?php getdata('discord');?>>Discord</a></li>
    </ul>
</nav>

</header>

<style>
  
  
/* Clearing floats */
.cf:before,
.cf:after {
  content: " ";
  display: table;
}

.cf:after {
  clear: both;
}

.cf {
  *zoom: 1;
}

.serverlogo
{
	margin-top: 20px;
	margin-left: 60px;
}

/* Mini reset, no margins, paddings or bullets */
.menu,
.submenu {
  
  margin: 0;
  padding: 0;
  list-style: none;
}

/* Main level */
.menu {			
  margin: -70px auto;
  margin-right: 30px;

  width: 800px;
  /* http://www.red-team-design.com/horizontal-centering-using-css-fit-content-value */
  width: -moz-fit-content;
  width: -webkit-fit-content;
  width: fit-content;	
}

.menu > li {
  background: #cc3843;
  float: left;
  position: relative;
  transform: skewX(25deg);
  z-index: 1000;
}

.menu a {
  display: block;
  color: #fff;
  text-transform: uppercase;
  text-decoration: none;
  font-family: Arial, Helvetica;
  font-size: 14px;
}		

.menu li:hover {
  background: #e74c3c;
}		

.menu > li > a {
  transform: skewX(-25deg);
  padding: 1em 2em;
}

/* Dropdown */
.submenu {
  
  position: absolute;
  width: 200px;
  left: 50%; margin-left: -100px;
  transform: skewX(-25deg);
  transform-origin: left top;
  
}

.submenu li {
  background: #cc3843;
  position: relative;
  overflow: hidden;		

  
}						

.submenu > li > a {
  padding: 1em 2em;			
}

.submenu > li::after {
  content: '';
  position: absolute;
  top: -125%;
  height: 100%;
  width: 100%;			
  box-shadow: 0 0 50px rgba(0, 0, 0, .9);			
  
}		

/* Odd stuff */
.submenu > li:nth-child(odd){
  transform: skewX(-25deg) translateX(0);
}

.submenu > li:nth-child(odd) > a {
  transform: skewX(25deg);
}

.submenu > li:nth-child(odd)::after {
  right: -50%;
  transform: skewX(-25deg) rotate(3deg);
}				

/* Even stuff */
.submenu > li:nth-child(even){
  transform: skewX(25deg) translateX(0);
}

.submenu > li:nth-child(even) > a {
  transform: skewX(-25deg);
}

.submenu > li:nth-child(even)::after {
  left: -50%;
  transform: skewX(25deg) rotate(3deg);
}

/* Show dropdown */
.submenu,
.submenu li {
  opacity: 0;
  visibility: hidden;	
  		
}

.submenu li {
  transition: .2s ease transform;
}

.menu > li:hover .submenu,
.menu > li:hover .submenu li {
  opacity: 1;
  visibility: visible;
  
}		

.menu > li:hover .submenu li:nth-child(even){
  transform: skewX(25deg) translateX(15px);			
  
}

.menu > li:hover .submenu li:nth-child(odd){
  transform: skewX(-25deg) translateX(-15px);			
}

</style>
