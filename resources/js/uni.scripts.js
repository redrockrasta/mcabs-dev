$(window).load(function (){
    $(document).ready(function(){

        /*This is for new subscriber*/
    	if($('#submitmailer').length)
    	{
    		$('#submitmailer').on('click', function()
    		{
    			if (validateEmail(document.getElementById("txtmailer").value))
    			{
	    			var mailer = document.getElementById("txtmailer").value;

	    			if (!!mailer)
	    			{
	    				$('#submitmailer').attr("href", "/sendmail/" + mailer);
                        return;
	    			}
    			}

    			document.getElementById("validationmail").innerHTML  = 'Invalid Email Address.';
                $('html, body').animate({
                   //scrollTop: $('footer').offset().top
                   scrollTop: $('#txtmailer').offset().top
                }, 'slow');
    			return;
    		});
    	}

        /*This codes are for the contact us*/
        if($('#submitcontact').length)
        {
            $('#submitcontact').on('click', function()
            {
                var fullname = document.getElementById("txtname").value;
                var email = document.getElementById("txtemail").value;
                var message = document.getElementById("txtmessage").value;

                var list = document.getElementsByClassName("errormessage");
                for (var i = 0; i < list.length; i++) {
                    document.getElementsByClassName("errormessage")[i].innerHTML = '';
                }

                if (!!fullname && !!email && !!message)
                {

                    if (validateEmail(document.getElementById("txtemail").value))
                    {
                        $('#submitcontact').attr("submit", "/sendcontact/" + fullname + "/" + email + "/" + message);
                    }

                    document.getElementById("validationemail").innerHTML  = 'Invalid Email Address.';
                }

                if (!fullname) document.getElementById("validationname").innerHTML  = 'This field is required.';
                if (!email) document.getElementById("validationemail").innerHTML  = 'This field is required.';
                if (!message) document.getElementById("validationmessage").innerHTML  = 'This field is required.';

                $('html, body').animate({
                   scrollTop: $('#txtname').offset().top
                }, 'slow');
                return;
            });
        }

        /*Check if email is valid*/
    	function validateEmail(email) {
		    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		    return re.test(email);
		}

        $("#cf7_controls").on('click', 'span', function() {
            $("#cf7 img").removeClass("opaque");

            var newImage = $(this).index();

            $("#cf7 img").eq(newImage).addClass("opaque");

            $("#cf7_controls span").removeClass("selected");
            $(this).addClass("selected");
        });

        /*This is for the navigation*/
        $('.menu-toggler').on('click',function(){
            console.log($(this).nextAll())
            $('.child-toggler').toggle('700');
        });


        
    });
});
