<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" >
<head>
	<title>xxxxxx Crop</title>
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
	<script type="text/javascript" src="/5073/js/crop/js/mootools-for-crop.js"> </script>
	<script type="text/javascript" src="/5073/js/crop/js/UvumiCrop-compressed.js"> </script>
	
	<link rel="stylesheet" type="text/css" media="screen" href="/5073/js/crop/css/uvumi-crop.css" />
	<style type="text/css">
		body,html{
			background-color:#333;
			margin:0;
			padding:0;
			font-family:Trebuchet MS, Helvetica, sans-serif;
		}
		
		hr{
			margin:20px 0;
		}
		
		#main{
			margin:5%;
			position:relative;
			overflow:auto;
			color:#aaa;
			padding:20px;
			border:1px solid #888;
			background-color:#000;
			text-align:center;
		}

		#resize_coords{
			width:300px;
		}
		
		#previewExample3{
			margin:10px;
		}

		.yellowSelection{
			border: 2px dotted #FFB82F;
		}

		.blueMask{
			background-color:#00f;
			cursor:pointer;
		}
	</style>
	<script type="text/javascript">
		exampleCropper1 = new uvumiCropper('example1',{
			coordinates:true,
			preview:true,
			downloadButton:false,
			saveButton:true
		});
	</script>
</head>
<body>
	<div id="main">
		<div>
			<p>
				Click mask: Move resizer to that position<br/>
				Shift + Resize: Keep current selection's aspect ratio if not enabled by default<br/>
				Doubleclick on resizer: Maximize selection
			</p>
			<p>
				<img id="example1" src="http://www.xxxxxx.com<?php echo $path; ?>" alt="cropping test"/>
			</p>
		</div>
	</div>
</body>
</html>
