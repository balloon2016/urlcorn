<!DOCTYPE html>
<html>
<head>
	<?php 
		$title="URLCORN - 에러페이지 관리";
		echo "<title>".$title."</title>";
	 ?>
	 <meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, internal-scale=1.0">
	 <style type="text/css">
		@import url('https://fonts.googleapis.com/css?family=Sunflower:300|Nanum+Gothic+Coding&subset=korean');

		body {
			font-size: 28px;
			font-family: 'Nanum Gothic Coding', sans-serif;
			text-align: center;
			margin: 0px;
		}
		header {
			font-family: 'Sunflower', sans-serif;
			font-size: 116%;
			font-weight: bold;
			margin-bottom: 28px;
			text-shadow: 0.5px 0.5px 0.3px #ddd;
		}
		input {
			font-size: 78%;
			font-weight: 500;
		}
	 	table {
	 		margin: auto;
	 		width: fit-content;
	 	}
	 	td {
	 		border: 0.5px solid #ddd;
	 		padding: 9px;
	 		padding-top: 2px;
	 	}
	 	table#result_score {
	 		text-align: left;
	 		/*float: left;*/
	 	}
	 	p#title {
			text-align: left;
			font-weight: 400;
			padding-bottom: 2.5px;
			border: 0.5px solid #bbb;
	 	}
	 	input[type='submit'] {
	 		padding: 4px;
	 		padding-bottom: 3.5px;
	 		font-weight: 400;
	 		font-size: 80%;
	 	}
	 	form#question th,
	 	form#question td {
	 		border: 1.5px solid #bbb;
	 		border-radius: 3px;
	 	}
	 	form#question input, .reload_input {
	 		font-size: 80%;
	 		font-weight: 400;
			font-family: 'Sunflower', sans-serif;
	 	}
	 	textarea {
	 		font-size: 85%;
			font-family: 'Sunflower', sans-serif;
	 		font-weight: 500;
	 		margin-top: 4px;
	 		height: 100px;
	 		width: 97.5%;
	 	}
	 </style>
</head>
<body oncontextmenu="return false" ondragstart="return false" onselectstart="return false">
	<?php 
		include './function.php';

		$title_data=$_POST["title"];
		$code=$_POST["code"];

		if(strlen($title_data)&&strlen($code)) {
			saveFile('./title', $title_data);
			saveFile('./code', $code);
		}
	 ?>
	<header>
		<?php echo $title; ?>
	</header>
	<section>
		<form method="POST" action="#">
			<table border='1px'>
				<tr>
					<td>
						<p id="title">
							설정
						</p>
					</td>
				</tr>
				<tr>
					<td>
						<input type="text" name="title" placeholder="제목" <?php echo "value='".read_file('./title')."'"; ?>><br>
						<textarea name="code" placeholder="설명 내용"><?php echo read_file('./code'); ?></textarea><br>
						<input type="submit" value="저장">
					</td>
				</tr>
			</table>
		</form>
	</section>
</body>
</html>