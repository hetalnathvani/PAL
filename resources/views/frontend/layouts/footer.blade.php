<!DOCTYPE html>
<html>
<head>
<link rel="http://127.0.0.1:8000/" href="cygnet.png" type="image/png" sizes="16x16">
	<title></title>
	<style type="text/css">
		body {
			font-family: Arial, Helvetica, sans-serif;
			
		}
		.container1 {
			position: relative;
			text-align: center;
			color: black;
		}

		.bg{
			background-image: url("/img/frontend/9.jpg");
  			background-color: #cccccc;
			background-repeat: no-repeat;
			background-size: cover;
		}
		.img-block {
			position: relative;
			font-family: Arial;
		}
		.text-block {
			position: absolute;
			bottom: 20px;
			right: 20px;
			background-color: black;
			color: white;
			padding-left: 20px;
			padding-right: 20px;
		}
		.flip-box {
			background-color: transparent;
			width: 300px;
			height: 200px;
			/* border: 1px solid #f1f1f1; */
			perspective: 1000px;
		}

		.flip-box-inner {
			position: relative;
			width: 100%;
			height: 100%;
			text-align: center;
			transition: transform 0.8s;
			transform-style: preserve-3d;
		}

		.flip-box:hover .flip-box-inner {
			transform: rotateY(180deg);
		}

		.flip-box-front, .flip-box-back {
			position: absolute;
			width: 100%;
			height: 100%;
			backface-visibility: hidden;
		}

		.flip-box-front {
			background-color:  #00264d;
			opacity : 0.7;
			color: white;
		}

		.flip-box-back {
			background-color: #ADD8E6;
			/* opacity : 0.7; */
			color: black;
			transform: rotateY(180deg);
		}
		.button {
			background-color: #4CAF50; /* Green */
			border: none;
			color: white;
			padding: 15px 32px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 20px;
			margin: 4px 2px;
			cursor: pointer;
		}
		.button:hover {
  			box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
		}
		.footer{
			padding: 20px;
            text-align: center;
            background: black;
            margin-top: 20px;
		}
		.col-container {
  			display: flex;
  			width: 100%;
		}
		.col {
  			flex: 1;
  			padding: 16px;
			display : inline-block;
		}
		.opacity{
			opacity: 0.7;
  			filter: alpha(opacity=50)
		}
		.border{
			border-bottom:2px solid white;
		}
		
		.img{
  			position: relative;
  			text-align: center;
			  color: white;
 		 	font-size: 30px;
		}
		.imag{
			position: relative;
  			text-align: center;
 		 	color: 	white;
 		 	font-size: 25px;
		}
		.imeg{
			position: relative;
  			text-align: center;
 		 	color: 	white;
 		 	font-size: 25px;
		}
		.overlay {
  			position: absolute;
  			top: 0;
  			bottom: 0;
  			left: 0;
  			right: 0;
  			height: 100%;
  			width: 100%;
  			opacity: 0;
  			transition: .5s ease;
  			background-color: #008CBA;
		}

		.container:hover .overlay {
  			opacity: 1;
		}
		.centered {
  			position: absolute;
  			left: 0;
    		text-align:center;
    		padding-bottom: 250px;
    		top: 130px;
    		width: 100%
		}
		.centered1 {
  			position: absolute;
  			left: 0;
    		text-align:center;
    		top: 70px;
    		width: 100%
		}
		.centered2 {
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
		}
		.fa {
			  padding: 12px;
			  font-size: 42px;
			  width: 35px;
			  text-align: center;
			  text-decoration: no;
			  margin: 5px 5px;
			  border-radius: 100%;
		}
		.fa:hover {
    		opacity: 0.7;
		}
		.fa-facebook {
  			background: #3B5998;
  			color: white;
		}
		.fa-facebook:before {
  			margin-left: -3px;
		}
		.fa-skype {
 			background: #00aff0;
  			color: white;
		}
		.fa-skype:before {
  			margin-left: -3px;
		}
		.fa-youtube {
  			background: #bb0000;
  			color: white;
		}
		.fa-youtube:before {
  			margin-left: -2px;
		}
		.fa-linkedin {
  			background: #007bb5;
  			color: white;
		}
		.fa-linkedin:before {
  			margin-left: -1px;
		}
		.fa-twitter {
  			background: #55ACEE;
  			color: white;
		}
		.fa-twitter:before {
  			margin-left: -1px;
		}
		.fa-google {
  			background: #dd4b39;
  			color: white;
		}
		.fa-facebook:before {
  			margin-left: -3px;
		}
		.fa-google:before {
  			margin-left: -1px;
		}
		.address{
			text-align: left;
			padding-left: 45px;
		}
	</style>
</head>
<body>
</body>
</html>