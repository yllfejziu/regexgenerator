<!DOCTYPE html>
<html>
<head>
	<title>Email regex generator</title>
	<link rel="icon" href="images/email-icon.png">
	<?php require 'includes.php'?>
</head>
<body>

	<div class="text-center">
	<h3 id="mainTitle"> Type an email: </h3>
		<input type="email" class="form-control" id="email" placeholder="Email...">
		<button class="btn btn-primary" id="button"> Generate </button>
	</div>
	</div>

	<div class="text-center font-weight-bold" id="regexTitle"></div>
	<div class="text-center" id="regex"></div> <br>
	<div class="text-center hidden" id="hiddenDiv"> <button id="btnTestEmails" class="btn btn-primary" data-toggle="modal" data-target="#myModal"> Test emails </button> </div>

	<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Test emails</h4>
        </div>
        <div class="modal-body">
        	<div class="text-center">
        		<p class="font-weight-bold">Regex: </p>
        		<span class="regex"></span>
				<input type="email" class="form-control" id="testEmail" placeholder="Email...">
				<button id="btnTestEmail" class="btn btn-primary"> Test email </button>
        	</div>

        </div>
        <div class="text-center">
        	<span class="validation text-center glyphicon"></span>
        </div>
     </div>
      
    </div>
  </div>

</body>
</html>