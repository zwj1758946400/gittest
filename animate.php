<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
		@keyframes loading{
			0%{
				transform: rotateZ(0deg);
			}
			100%{
				transform: rotateZ(360deg);
			}
		}
		.loading{
			width: 0px;
			height: 0px;
			/*background-color: red;*/
			border-top: 30px solid red;
			border-bottom: 30px solid blue;
			border-left: 25px solid transparent;
			border-right: 25px solid transparent;
			position: absolute;
			left: 50%;
			top: 50%;
			margin-left: 25px;
			margin-top: -40px;

			animation-name: loading;
			animation-duration: 1s;
			animation-iteration-count: infinite;
		}
	</style>
</head>
<body>
	<div class="loading"></div>
</body>
<html>