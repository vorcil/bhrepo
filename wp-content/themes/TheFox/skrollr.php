<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />

	<title>Drawing a path</title>
</head>


<body style="text-align:center;">
  <style>
    svg.fixed{
    position:fixed;
    top: 100px;
    left: 100px;
    }
    #skrollr-body{
    height: 5000px;
    }

    #slides-container {
    width: 100%;
    height: 100%;
    overflow: hidden;
}
 
/* double the height/width of a viewport */
#slides {
    width: 100%;
    height: 100%;
    position: fixed;
    top: 0;
    left: 0;
}
.slide {
    position:absolute;
    top:0;
    left:0;
    width:50%;
    height:50%;
}
#slide-1 {
    background: url('http://blackhat.co.nz/src/section1.jpg') no-repeat center center;
    
     -webkit-background-size: cover;
   -moz-background-size: cover;
   -o-background-size: cover;
   background-size: cover;
}
#slide-3 {
    background: url('http://blackhat.co.nz/src/section2.jpg') no-repeat center center;
     -webkit-background-size: cover;
   -moz-background-size: cover;
   -o-background-size: cover;
   background-size: cover;
    
    
}
#slide-4 {
    background: url('http://blackhat.co.nz/src/section3.jpg') no-repeat center center;
    -webkit-background-size: cover;
   -moz-background-size: cover;
   -o-background-size: cover;
   background-size: cover;
}
#slides {
    width: 200%;
    height: 200%;
}

  </style>

  <div id="slides-container">
    <div id="slides">
      <div id="slide-1" class="slide" data-0="opacity:1;" data-100p="opacity:1;"></div>
      <div id="slide-3" class="slide" data-100p="opacity:0;" data-200p="opacity:1;"></div>
      <div id="slide-4" class="slide" data-200p="opacity:0;" data-300p="opacity:1;"></div>
    </div>
  </div>

  <div id="skrollr-body">
  
    <svg class="fixed" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100%">
      <path
	 style="fill:none;stroke:lightgray;stroke-width:2;stroke-linecap:round;stroke-linejoin:miter;stroke-miterlimit:4;stroke-opacity:1;stroke-dasharray:6000;stroke-dashoffset:0"
	 data-0="stroke-dashoffset:6000;" data-end="stroke-dashoffset:0;"  data-200p="stroke-dashoffset:0"
	 d="M 803.00,69.08
            C 803.00,69.08 851.00,69.08 851.00,69.08
            851.00,69.08 1000.00,69.08 1000.00,69.08
            1000.00,69.08 1457.00,69.08 1457.00,69.08
            1457.00,69.08 1620.00,69.08 1620.00,69.08
            1645.12,69.04 1659.96,85.37 1660.00,110.00
            1660.00,110.00 1660.00,532.00 1660.00,532.00
            1660.00,532.00 1660.00,619.00 1660.00,619.00
            1659.89,642.60 1645.03,658.96 1621.00,659.00
            1621.00,659.00 948.00,659.00 948.00,659.00
            948.00,659.00 784.00,659.00 784.00,659.00
            761.17,658.96 745.04,644.15 745.00,621.00
            745.00,621.00 745.00,202.00 745.00,202.00
            745.00,202.00 745.00,107.00 745.00,107.00
            745.03,87.12 756.92,73.96 776.00,69.08
            776.00,69.08 803.00,69.08 803.00,69.08 Z" />


      <path
	 style="fill:none;stroke:lightgray;stroke-width:2;stroke-linecap:round;stroke-linejoin:miter;stroke-miterlimit:4;stroke-opacity:1;stroke-dasharray:6000;stroke-dashoffset:0"
	 data-0="stroke-dashoffset:6000;" data-end="stroke-dashoffset:0;"
	 d="M 1581.00,101.00
            C 1581.00,101.00 1581.00,624.00 1581.00,624.00
            1581.00,624.00 825.00,624.00 825.00,624.00
            825.00,624.00 825.00,101.00 825.00,101.00
            825.00,101.00 1581.00,101.00 1581.00,101.00 Z" />

      <path
	 style="fill:none;stroke:lightgray;stroke-width:1;stroke-linecap:round;stroke-linejoin:miter;stroke-miterlimit:4;stroke-opacity:1;stroke-dasharray:6000;stroke-dashoffset:0"
	 data-0="stroke-dashoffset:6000;" data-end="stroke-dashoffset:0;"
	 d="M 797.00,346.97
            C 816.02,355.49 808.84,382.32 786.00,380.91
            769.67,379.90 759.89,362.01 773.04,350.21
            776.35,347.25 778.83,346.46 783.00,345.47
            787.89,344.79 792.40,344.90 797.00,346.97 Z" />

      <path
	 style="fill:none;stroke:lightgray;stroke-width:1;stroke-linecap:round;stroke-linejoin:miter;stroke-miterlimit:4;stroke-opacity:1;stroke-dasharray:6000;stroke-dashoffset:0"
	 data-0="stroke-dashoffset:6000;" data-end="stroke-dashoffset:0;"
	d="M 1624.00,355.55
           C 1634.93,357.34 1631.69,372.43 1621.00,370.57
             1613.62,369.28 1610.57,359.79 1620.02,355.55
             1621.72,355.40 1622.14,355.11 1624.00,355.55 Z" />
    </svg>
  </div>

	<script type="text/javascript" src="http://blackhat.co.nz/src/skrollr.js"></script>
	<script type="text/javascript">
	skrollr.init({
		forceHeight: false
	});
	</script>
</body>

</html>
