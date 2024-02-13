<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" />        
<link rel="stylesheet" href="{{ asset('countdown/assets/countdown/jquery.countdown.css')}}" />   

<nav class="navbar fixed-bottom d-flex">
    <div class="row m-auto align-items-center h-100">
        <div class="col-md-6 col-sm-12 text-center mx-auto">
            <p class="text-white" id="note"></p> 
        </div>
        <div class="col-md-6 col-sm-12 text-center p-0 mx-auto"> 
            <div id="countdown"></div>	 
        </div>
    </div>
</nav>	   
<script src="{{ asset('countdown/assets/countdown/jquery.countdown.js')}}"></script>		
<script>
$(function(){
	
	var note = $('#note'),
		ts = new Date(2023, 1, 3),
		newYear = true;
	
	if((new Date()) > ts){
		ts = (new Date()).getTime() + 10*24*60*60*1000;
		newYear = false;
	}
		
	$('#countdown').countdown({
		timestamp	: ts,
		callback	: function(days, hours, minutes, seconds){
			
			var message = "";
			
			// message += days + " дн." + ( days==1 ? '':'' ) + ", ";
			// message += hours + " час." + ( hours==1 ? '':'' ) + ", ";
			// message += minutes + " мин." + ( minutes==1 ? '':'' ) + " и ";
			// message += seconds + " сек." + ( seconds==1 ? '':'' ) + " <br />";
			
			if(newYear){
				message += "Preseason 7 qabul jarayoni tugashiga " + days + " kun qoldi!";
			}
			
			note.html(message);
		}
	});
	
});</script>
