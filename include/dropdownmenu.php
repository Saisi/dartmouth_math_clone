
/* ==========DROPDOWN MENU========================== 
This copyright notice must be untouched at all times.

The original version of this stylesheet and the associated (x)html
is available at http://www.cssplay.co.uk/menus/drop_definition.html
Copyright (c) 2005-2007 Stu Nicholls. All rights reserved.
This stylesheet and the assocaited (x)html may be modified in any 
way to fit your requirements.
=================================================================== */
#menu {
	list-style-type:none; 
	margin: 0; 
	padding:0;
	}

#menu li {
	float:right; 
	padding:0; 
/*	margin:0 1px 0 0; */
	margin:0 0 0 0; 
	position:relative; 
/*	width:179px;  */
	width:180px;
	height:25px;
	z-index:100;
	}

#menu li dl {
	position:absolute; 
	top:0; 
	left:0;
	}

#menu li a, #menu li a:visited {text-decoration:none;}

#menu li dd {display:none;}

#menu li:hover, #menu li a:hover {border:0;}

#menu li:hover dd, #menu li a:hover dd {display:block;}

/* #menu li:hover dl, #menu li a:hover dl {padding-bottom:0px;} */

#menu table {
	border-collapse:collapse; 
	padding:0; 
	margin:-1px;
	font-size:1em;
	}

#menu dl {
/*       width: 179px; */
	width: 180px; 
	margin: 0; 
	padding: 0; 
	background: #000000;
	text-align:center; 
 	cursor:pointer;   
	}

#menu dt {
	margin:0; 
	padding: 5px; 
	font-size: 1.1em; 
	color: #fff; 
	}

#menu .one {background: #003333;}

#menu .two {background: #1c4a4a;}

#menu .three {background: #386060;}

#menu .four {background: #547777;}

#menu .five {background: #708d8d;}

#menu dd {
	margin:0; 
	padding:0; 
	color: #fff; 
	font-size: 1em; 
	background: #006666; 
	text-align:left;
	}

#menu dd.last {
    border-bottom:1px solid #444;
}

.gallery dt a, .gallery dt a:visited {
	display:block; 
	color:#fff;
	}

.gallery dd a, .gallery dd a:visited {
	color:#fff; 
	text-decoration:none; 
	display:block; 
	padding:4px 4px 4px 10px;
	background-color: #006666; 
	width:165px;
	}

.gallery dd a:hover {
	background-color:  #003333;
	color:#9cf;
	}

/* Sarunas, 2009.10.20. */
dd.sepone a, dd.sepone a:hover { 
	cursor: default;
	color:#fff; 
	text-decoration:none; 
	display:block; 
	padding:4px 4px 4px 10px;
	background-color: #006666; 
	width:165px;
	}
/**/
