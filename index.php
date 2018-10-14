<!Doctype html>
<html>
<head>
	<meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
	<title>Lock Picker Game</title>
	<link href="https://fonts.googleapis.com/css?family=Nova+Square" rel="stylesheet">
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	    <link rel="stylesheet" href="css/main.css"/>
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>	
<body>

	<div class="ctc-container">
	<div class="ctc-c-in">
		
  <button type="button" id="one" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Register
  </button>
  <button type="button" id="two" class="btn btn-info btn-lg" data-toggle="modal" data-target="#tellModal">All Players
  </button>
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
         <!--  <h4 class="modal-title">Modal Header</h4> -->
        </div>

        <div class="modal-body" style="color: #000000">
<form id="myForm" action="posted.php" method="post">
    

          <br> Your Name<input type="text" name="nam"/> <button>Submit</button>
          </form>
         

<script> 
    $(document).ready(function() { 
        $('#myForm').ajaxForm(function() { 
           alert('Inserted');
        }); 
    }); 
</script> 

       </div>       



        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
        
      </div>
      
    </div>
  </div>


  <div class="modal fade" id="tellModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
         
        </div>
        <div class="modal-body" style="color: #000000">
<?php
include "show.php";
?>

       </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

<br/>
		<h1 class="text-center title">LOCK PICKER</h1>
		<div class="row">
			<h1 class="col-xs-12 text-center title" id="code">____</h1>
		</div>
		<div class="row">
			<table class="col-xs-12">
				<thead>
					<tr>
						<th>Guess</th>
						<th>Result</th>
					</tr>
				<thead>
				<tbody id="tbody">
					
				</tbody>
			</table>
		</div>
		<div class="row">
			<p class="text-center" id="message">Enter 4 digit number and click Enter</p>
		</div>
		<div class="row text-center" id="inputdiv">
			<input type="hidden" id="random">
			<input type="hidden" id="chance">
			<input class="form-control number" type="number" id="userGuess">
			<input type="button" class="btn btn-primary" value="Enter" onClick="guess()">
		</div>
		<div class="row">
			<h3>Rules</h3>
			<ol>
				<li>Each guess must consist of 4 numeric characters.</li>
				<li>Numbers may be used more than once!</li>
				<li>You win only if your guess is an exact match.</li>
				<li>You lose if you fail to guess the code under 10 guesses.</li>
				<li>
				<span class="glyphicon glyphicon-ok"></span>
				Means a number is in the correct place.
				<li>
				<span class="glyphicon glyphicon-transfer"></span>
				Means a number is part of the code, but not in the right position.
				</li>
				<li>
				<span class="glyphicon glyphicon-transfer"></span>
				Doesn't consider how many times a number exists in the code.
				</li>
				<li>
				<span class="glyphicon glyphicon-remove"></span>
				Means a number is not part of the code.
				</li>
			</ol>
		</div>
	</div>
	</div>

<script type="text/javascript" src="js/main.js"></script>
<script src="http://malsup.github.com/jquery.form.js"></script> 
</body>
</html>