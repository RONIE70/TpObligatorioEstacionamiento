<html>
	<head>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
		
     <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <h4 class="my-0 mr-md-auto font-weight-normal">Estacionamiento ScorpionsApp</h4>
    <nav class="my-2 my-md-0 mr-md-3">
      <a class="btn btn-outline-primary" href="../index.php">Pagina Principal</a>
      <a class="btn btn-outline-primary" href="../registro.php">Registro</a>

    </nav>
    <a class="btn btn-outline-primary" href="../login.php">Login</a>
  </div>
  
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script type="text/javascript">
			var username = prompt("Ingrese su nombre de usuario","");
			window.addEventListener("DOMContentLoaded",function(){
				//Grab elements
				var canvas,video,context,videoObj,url,upload;
				canvas  = document.getElementById("c");
				video   = document.getElementById("v");
				context = canvas.getContext("2d");
				snap    = document.getElementById("snap");
				url     = window.URL || window.webkitURL;
				upload  = document.getElementById("upload");
				upload.style.display = "none";
				videoObj = {video:true};
				navigator.getUserMedia = navigator.getUserMedia || navigator.webkitGetUserMedia ||
										 navigator.mozGetUserMedia || navigator.msGetUserMedia;
				if(navigator.getUserMedia){
					alert("WEBCAM HABILITADA");
					navigator.getUserMedia(
						videoObj,
						function(stream){
							/**/
							mediaStreamTrack=typeof stream.stop==='function'?stream:stream.getTracks()[1];
							try{
								video.src = url.createObjectURL(stream);
							}catch(e){
								console.log(e);
								video.srcObject=stream;
							}
							
							video.play();
						},
						function(error){
							alert("ALGO NO FUNCIONA CORRECTAMENTE");
						}
					);
				}else{
					alert("Bienvenido");
				}
				document.getElementById("snap").addEventListener("click",function(){
					draw(video,context,video.width,video.height);
				});
				function draw(video,context,width,height){
					context.drawImage(video,0,0,width,height);
					upload.style.display = "block";
				}
				upload.addEventListener("click",function(){
					var dataUrl = canvas.toDataURL("image/jpeg",1.0);
					$.ajax({
						type:"POST",
						url: "webcam-upload.php",
						data:{
							imgBase64:dataUrl,
							user:username
						},
					}).done(function(response){
						alert("Foto guardada = "+ response);
					}).fail(function(e) {
   console.info("error",e)
  })
  .always(function() {
    alert( "ACCION COMPLETA" );
  });
 ;
				});
			},false);
		</script>
		<style >
	#snap, #upload{
    font-family:'Oxygen', sans-serif;
    font-size: 1rem ;
    text-align: center;
    color: white;
    border-radius: 10px;
    border-width: 5px;
    line-height: 35px;
    text-shadow:2px 2px 2px rgb(134, 201, 240) ;
    letter-spacing: 1px;
    background-color: rgb(41, 145, 243);
    width: 225px;
    background-color: #1612e9;
    align-content: center;
    }
    
    #snap{
      position: relative;
      top:-100px;
      left:450px;
    }
    #cuadro{
     background-color: #1612e9;
     max-width: 400px;
     position: relative;
     left:350px;
     align-content: center;
     top:0px;
    }
    #v{
     position: relative;
     left:60px;
     border-color: white;
     border-width: 5px;

    }

    #upload{
	position: relative;
      top:-90px;
      left:450px;
    }
	
    #c{
    position: relative;
    left:600px;
    width: 150px;
    height: 150px;
    }


		</style>
	</head>
	<body>
		<p><h4>Por favor verifique la calidad de su foto, antes de guardarla, Gracias</h4></p>
		<div id="cuadro">
		<video id="v" width="74%" height="70%" autoplay></video>
		</div>
		<button id="snap" type="button">TOMAR FOTO</button>
		<canvas id="c" width="74" height="70"></canvas>
		<button type="button" id="upload">SUBIR</button>
	</body>
</html>