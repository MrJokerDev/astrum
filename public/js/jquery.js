$("#top-header").ready(function() {
    setTimeout(function() { 
        $(this).animate({
            backgroundColor: "linear-gradient(270deg, rgba(106,87,212,1) 0%, rgba(49,83,129,1) 16%, rgba(181,137,178,1) 45%, rgba(212,227,141,1) 100%)"
        }, 1000).delay(2000).queue(function() {
            $(this).animate({
            backgroundColor: "linear-gradient(90deg, rgba(106,87,212,1) 0%, rgba(49,83,129,1) 16%, rgba(181,137,178,1) 45%, rgba(212,227,141,1) 100%)"
            }, 1000).dequeue();
        });
    }, 2000);
});