<!-- Latest compiled and minified CSS -->
<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<link rel="stylesheet" href="css/style.css">

<script>
		
	$(document).ready(function() {
		$('#email').on("keyup", function(event){
			event.preventDefault();
			if(event.keyCode === 13){
				$('#button').click();
			}
		})

		$('#testEmail').on("keyup", function(event){
			event.preventDefault();
			if(event.keyCode === 13){
				$('#btnTestEmail').click();
			}
		})

		$('#button').on('click', function(){
			let email = $('#email').val();

			if(!validateEmail(email)){
				alert('Incorrect email format!');
				$('#regexTitle').text('');
				$('#regex').text('');
				$('#hiddenDiv').addClass('hidden');
			}else{
				let atPos = email.indexOf('@');
				let prefix = email.substring (0, atPos);
				let suffix = email.substring(atPos + 1);
				// alert(prefix + ' ' + suffix);

				let generalRegex = new RegExp(/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/);

				let generatedRegex = new RegExp("^(([^<>()\\[\\]\\\\.,;:\\s@\"]+(\\.[^<>()\\[\\]\\\\.,;:\\s@\"]+)*)|(\".+\"))@(" + suffix + ')$');

				$('#regexTitle').text('Generated regex: ');
				$('#regex').text(generatedRegex);
				$('#hiddenDiv').removeClass('hidden');

				$('#btnTestEmails').on('click', function(){
					$('.regex').text(generatedRegex);
				});

				$('#btnTestEmail').on('click', function(){
					let testEmail = $('#testEmail').val();
					let validation = generatedRegex.test(String(testEmail).toLowerCase());
					if(validation){
						$('.validation').addClass('glyphicon-ok green').removeClass('glyphicon-remove red');

					}else{
						$('.validation').addClass('glyphicon-remove red').removeClass('glyphicon-ok green');
					}
					//alert(validation);
				});
			}
		});
		
	});

	function validateEmail(email) {
	    let re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

	    let suffixRegex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@(cacttus.com)$/;

	    return re.test(String(email).toLowerCase());
	}

</script>