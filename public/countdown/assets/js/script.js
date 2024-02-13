$(function(){
	
	var note = $('#note'),
		ts = new Date(2023, 1, 7),
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
				message += "Осталось до завершения набора "+ days +" дней на Preseaseon 7!";
			}
			else {
				message += "Осталось от текущего момента до окончания "+ days +" дней!";
			}
			
			note.html(message);
		}
	});
	
});
