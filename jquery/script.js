$(document).ready(function(){
//Code 

$('#login_icon_1').hide();
$('#login_icon_2').hide();
$('#login_icon_3').hide();
$('#login_icon_4').hide();
$('#login_icon_5').hide();

$('#login_box').hide();

//Mouseover start countdown

$("#icon_no_1").mouseover(function()
{

$(this).fadeTo("slow", 0.23);

//Countdown

var counter = 0;
var interval = setInterval(function() {
    counter++;
    // Display 'counter' wherever you want to display it.

	if (counter == 1) {
	
	//Display 1
	$('#login_icon_1').fadeIn();
	//Fade in
	
	}
	
	if (counter == 2) {
	
	//Display 2
	
	$('#login_icon_1').fadeOut();
	
	//Fade in login icon 2
	
	$('#login_icon_2').fadeIn();
	
	}
	
	if (counter == 3) {
	
	//Display 1
	
	}
	
	if (counter == 4) {
	
	//Display 1
	
	}
	
    if (counter == 5) {
	
	   
        // Display 5 then a login box
		
		
		
        clearInterval(counter);
    }
}, 1000);

}

);

$("#icon_no_1").mouseleave(function()
{

$(this).fadeTo("slow", 1);

$('#login_icon_1').hide();
$('#login_icon_2').hide();
$('#login_icon_3').hide();
$('#login_icon_4').hide();
$('#login_icon_5').hide();

}

);

});