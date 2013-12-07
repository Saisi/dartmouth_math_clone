
@font-face {
    font-family: mySerif;
    src: url('https://www.math.dartmouth.edu/include/fonts/FreeSerif.ttf');
}
@font-face {
    font-family: mySerif;
    font-weight:bold;
    src: url('https://www.math.dartmouth.edu/include/fonts/FreeSerifBold.ttf');
}
@font-face {
    font-family: mySerif;
    font-style:italic;
    src: url('https://www.math.dartmouth.edu/include/fonts/FreeSerifItalic.ttf');
}
@font-face {
    font-family: mySerif;
    font-weight:bold;
    font-style:italic;
    src: url('https://www.math.dartmouth.edu/include/fonts/FreeSerifBoldItalic.ttf');
}


/*
@font-face {
    font-family: mySans;
    src: url('https://www.math.dartmouth.edu/include/fonts/OpenSans-Regular.ttf');
}
@font-face {
    font-family: mySans;
    src: url('https://www.math.dartmouth.edu/include/fonts/OpenSans-Semibold.ttf');
    font-weight:bold;
}
@font-face {
    font-family: mySans;
    src: url('https://www.math.dartmouth.edu/include/fonts/OpenSans-Italic.ttf');
    font-style:italic;
}
@font-face {
    font-family: mySans;
    src: url('https://www.math.dartmouth.edu/include/fonts/OpenSans-SemiboldItalic.ttf');
    font-weight:bold;
    font-style:italic;
}
*/

body {
	font-family: mySans, Arial, sans-serif; 
	font-size: 11px;
	line-height: normal;
	color: #000;
	background-color: #386060;
	background-repeat: repeat;
	margin: 0;
	padding: 0px;
}

i {
    /* "italics", not "slanted" */
    font-family: serif;
    font-style: italic;
}

img {
    border-style: none;
    border-width: 0px;
}

#leftgraphic img {
    border-style: none;
    border-width: 0px;
    /* Default for img is 'vertical-align: bsaeline', which ads 3px as bottom margin. */
    /* Either change vert-align, or use 'display: block' to get rid that margin */
    /*vertical-align: middle;*/
    display: block;
}


input.search {font-size: 90%}

a {
    text-decoration:none; color:#b34700;
}
a:link {
}

a:visited {
}

a:hover {
    color:#336666;
}

h1 {color: #003333;}
h2 {color: #003333; font-size:18px;}
h3 {color: #003333;}

/* added by jamesg 10-29-09 */

cite {
	color:#003333; 
}


/* --------------------------------------------------------
        Layout Structure Styles
*/

#masthead {
	width: 900px;
	display: inline;
	margin: 0;
	padding: 0;  
}


#masthead form { 
	float: right;
	border: 0;
	margin: 0;
	padding: 0;
}

#logo {
	float: left;
	width:100px;
	display: inline;
	height: 100px;
	margin: 0;
	padding: 0;
	color: #003333;
	background: #8BB9B9;
}

#banner {
	float: left;
	font-family: mySerif, "Times New Roman", serif; 
	text-align: left;
	letter-spacing: 0.7px;
	font-size: 26px; 
	width:350px;
	display: inline; 
	height:68px;
	margin: 0 0 0 0px;
	padding: 32px 0 0 30px;
	color: #003333;
	background: #8BB9B9; 
}



#mastlinks {
	float: right;
	width: 400px;
	height: 80px;
	display: inline;
	border: 0;
	margin: 0;
	padding: 10px;
	color: #000000;
	background: #8BB9B9;
	}

#main {display: inline;
      	font-size: 12px;
	float: left;
	width: 100%; 
	margin-left:auto;
	margin-right:auto;
	min-height: 500px;
	background: #fff;
	margin: 0;
	padding: 0;
/*        border:1px solid #ff0000;   */
	}

#navbar {
	float: right;
	display: inline;
	/*background-color: #99cccc;*/
	width: 900px;
	height: 24.4px;
	}

#leftside {
        float: left;
        width: 450px;
        min-height: 480px;
        }

#rightside {
        float: right;
        width: 450px;
        min-height: 480px;
        }



#leftgraphic {
	float: left;
	display: inline;
	background-color: #fff;
	width: 200px;
	min-height: 500px;
/*	padding: 25px 0 0 20px; */
/*      border:1px solid #00ff00;  */
	}

#leftgraphic180 {
	float: left;
	display: inline;
/*	text-align: center; */
	background-color: #fff;
	width: 165px;
	min-height: 480px;
	padding: 15px 0 0 15px;
/*        border:1px solid #00ff00;  */
	}

#rightcolumn {
	float: right;
	width: 620px;
	display: inline;
	background-color: #fff;
	min-height: 480px;
	padding: 25px 35px 25px 45px;
/*	border:1px solid #0000ff; */
	}

#rightcolumn710 {
	float: right;
	width: 695px;
	display: inline;
	background-color: #fff;
	min-height: 480px;
	padding: 13px 15px 15px 0px;
/*	border:1px solid #0000ff; */
	}


#singlecolumn {
	float: right;
	width: 620px;
	display: inline;
	background-color: #fff;
	min-height: 480px;
	padding: 10px;
/*	border:1px solid #0000ff; */
	}



#topright {
	float: right;
	display: inline;
	position: relative;
	background-color: #fff;
	width: 425px; 
	height: 365px;
	padding: 10px 10px 0px 10px;
	}

#rotating_img {
	width: 415px; 
	height: 340px;
	padding: 0;
	}

#rotator { 
	float: right;
	}

#topleft {
	float: left;
	display: inline;
	position: relative;
	background-color: #fff;
	width: 425px; 
	height: 260px;
	padding: 5px 10px 10px 20px;
	}

#bottomright {
	float: right;
	display: inline;
	position: relative;
	background-color: #fff;
	background-image: url("https://www.math.dartmouth.edu/graphics/LRgradient.jpg");
	background-repeat: no-repeat;
	width: 425px;
	min-height: 180px;
	padding: 0px 10px 10px 10px;
	}

#bottomleft {

	float: left;
	display: inline;
	position: relative;
	background-color: #fff;
	background-image: url("https://www.math.dartmouth.edu/graphics/RLgradient.jpg");
	background-repeat: no-repeat;
	width: 425px; 
 	min-height: 200px;  
	padding: 10px;
	}

#siteborder {
/*	background-color: #669999; */ 
/*      Use the body_bg to just add space with no appearance of border */
	background-color: #386060;
	width: 900px;
	margin-left: auto;
	margin-right: auto;
/*      padding provides thin border */
	padding: 3px;
/*	padding: 2px 0 0 0;   */
	}

div#footer {
	float: left;
	background-color: #8BB9B9;
	width: 892px;
	min-height: 20px;
	margin: 0;
	padding: 2px 4px 2px 4px;
	}
div#homepage_footer {
 	float: right;   
	background-color: #8BB9B9;
	width: 890px;
	min-height: 15px;
	margin: 0;
	padding: 0px 5px 2px 5px;
	}

#footer table, #homepage_footer table {width: 100%;}
#footer td.left, #homepage_footer td.left {text-align:left; width:50%;}
#footer td.right, #homepage_footer td.right {text-align:right; width:50%; vertical-align:middle; }

#quicklinks {
	list-style-type:none;
	margin: 0; 
	padding:0;
	}

#quicklinks li {
	padding:0; 
	margin:0 0 0 0; 
	position:relative; 
	width:119px;
 	height:1.5em;  
 	z-index:200;
	}

#quicklinks li dl {
	position:absolute;
	top:0; 
	left:0px;
	}

#quicklinks li a, #quicklinks li a:visited {text-decoration:none;}

#quicklinks li dd {display:none;}

#quicklinks li:hover, #quicklinks li a:hover {border:0;}

#quicklinks li:hover dd, #quicklinks li a:hover dd {display:block;}

/* #quicklinks li:hover dl, #quicklinks li a:hover dl {padding-bottom:0px;} */


#quicklinks table {
	border-collapse:collapse; 
	padding:0; 
	margin:-1px; 
	font-size:1em;
	}


#quicklinks dl {
	width: 119px;  
	margin: 0 0 0 0px; 
	}

#quicklinks dt {
	margin:0; 
	padding:0; 
	font-size: 11px; 
	color: #b34700; 
	}

/* #quicklinks .zero {background:#8BB9B9;}  */


#quicklinks dd {
	margin:0; 
	padding:0; 
	color: #fff; 
	font-size: 11px; 
	background: #006666; 
	}

#quicklinks dd.last {border-bottom:1px solid #444;}


.qlgallery dt a, .qlgallery dt a:visited {
	display:block;
	float:right;
	color:#b34700; 
	font-weight: bold;
/*	width: 119px; */
	}

.qlgallery dd a, .qlgallery dd a:visited {
	color:#fff; 
	text-decoration:none; 
	display:block; 
	float:right;
	padding:4px 10px 4px 4px;
	background-color: #006666; 
	width:119px;
	}

.qlgallery dd a:hover {
	background-color:  #003333;
	color:#9cf;
	}




/*  Calendar - home page */

#calendar{margin:10px 10px 10px 10px;}
/*#calendar a{font-weight:normal;color:navy;text-decoration:none;}
 #calendar a:visited{;}
 #calendar a:hover{color:green;}
*/
#calendar table{border: 1px;padding:0 10px;; width:380px;} 
#calendar th{text-align: right; font-weight:bold;padding: 1px 10px;}
#calendar td{text-align:left;}
.calendar-large{font-size:18px;color: #003333}
/*#more_calendar table{border: 0px; padding:0 10px; width:100%;} */
#more_calendar th{text-align: left; vertical-align:top; font-weight:bold; padding:0 10px 0 0;}
#more_calendar td{text-align: left; vertical-align:top;}

table.border {
    border-collapse: collapse;
    border: 1px solid #bbb;
}
table.border tr td, table.border tr th {
    border: 1px solid #bbb;
    padding: 4px;
}



#edit_calendar {
    margin: 30px;
}


#edit_calendar div.lastModified {
    color: #444;
    font-size: 90%;
    font-style: italic;
    margin-top: 3em;
}
#edit_calendar div.events{
    margin-top:25px;
}
#edit_calendar div.events *{
    font-size: 11px;
}
#edit_calendar p.highlights *{
    font-size: 14px;
}
#edit_calendar div.error{
    font-weight: bold;
    color: red;
}

#edit_calendar textarea,
#edit_calendar input[type="text"],
#edit_calendar input[type="checkbox"] {
    border-style:solid;
    border-width:1px;
    border-color:#999;
}

/* Contacts Page CSS */

#contacts table {
	border-width: 0px 0px 0px 0px;
	border-spacing: 2px;
	border-style: solid solid solid solid;
	border-color: blue blue blue blue;
	border-collapse: separate;
	background-color: #fff;

	font-size:11px;
	}

#contacts th {
	border-width: 0px;
	padding: 4px;
	border-style: solid solid solid solid;
	border-color: green green green green;

}

.tablehead th{
	/*-moz-border-radius: 9px 9px 0px 0px;*/ /* TL TR BR BL */ 
		border-width: 3px;
		border-style:solid;
		border-color: green green green green;
	padding: 4px;
}


#contacts td {
	border-width: 0px;
	padding: 4px;
	border-style: solid solid solid solid;
	border-color: green green green green;
/* 	-moz-border-radius: 12px 12px 12px 12px;  */

}


/*
Secondary Navigation Styles
*/

.secondary-nav {
	position: relative;
	right: 0px;
	font-family: mySans, Arial, sans-serif;
/* 	z-index: 1;  */
}

.secondary-nav li {
	float: right;
	display: block;
	background-color: #e4ebe7;

/* Firefox */
/*	-moz-border-radius-topleft: 0px;
	-moz-border-radius-topright: 9px;
	-moz-border-radius-bottomright: 9px;
	-moz-border-radius-bottomleft: 0px;
*/

	-webkit-border-top-left-radius: 0px;          /* Webkit / Safari */
	-webkit-border-top-right-radius: 9px;
	-webkit-border-bottom-right-radius: 9px;
	-webkit-border-bottom-left-radius: 0px;

  	-khtml-border-radius: 0px 9px 9px 0px;                  /* Konquerer */ 
 	-khtml-border-radius-topleft: 20px;       /* not functional */

/* All other CSS3 capable browsers */

 	 border-top-left-radius:     0;   
 	 border-top-right-radius:    9px;
 	 border-bottom-right-radius: 9px;
  	 border-bottom-left-radius:  0;

	padding: 7px;
	border-left: 1px solid #b3b4b4;
}

.secondary-nav .noline {
	border: 0px;

/* Firefox */
/*	-moz-border-radius-topleft: 9px;
	-moz-border-radius-topright: 0px;
	-moz-border-radius-bottomright:0px;
	-moz-border-radius-bottomleft:9px;
*/
	-webkit-border-top-left-radius: 9px;       /* Webkit / Safari */
	-webkit-border-top-right-radius: 0px;
	-webkit-border-bottom-right-radius: 0px;
	-webkit-border-bottom-left-radius: 9px;

 	-khtml-border-radius: 9px 0 0 9px;                 /* Konquerer */   

/* All other CSS3 capable browsers */

 	border-top-left-radius:     9px;
	border-top-right-radius:    0;
	border-bottom-right-radius: 0;
	border-bottom-left-radius:  9px;

}

/* Additional Styles (jamesg 10/29/09) */

.showcase {
	color: #003333; 
	font-size: 150%;

}

/* Sarunas, 2010.10.14 */
/* <td nowrap="nowrap"> is deprecated */
.nowrap {white-space:nowrap}

area:hover { border: 1px solid #d5d5d5; }
