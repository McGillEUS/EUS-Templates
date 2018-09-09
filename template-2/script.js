/*--------- Menu, Popups and News ----------*/
$(document).ready(function() {
	var $menu = $("#menu");
	var $icon = $("#icon");
	var $layer = $("#popup-layer");

    // Clicking menu icon
    $icon.on("click", function() {
        $(".popup").fadeOut(500);
    	$layer.fadeToggle();
    	$icon.toggleClass("icon-hover");
    	$menu.slideToggle();
    })    

    // Click a pop-able tile
	$(".pop").on("click", pop_out);

    function pop_out() {
        $(".popup").fadeOut(500);
        $icon.removeClass("icon-hover");
        $menu.slideUp();
    	$layer.fadeIn(500);

        var popup = $(this).attr("href");
        if($(window).width() < 1120) {
            $(".popup").addClass("enlarged");
        }
   		$(popup).fadeIn(500);

        $("html").css("overflow", "hidden");
    }

	$(".exit").on("click", exit);
    $("#popup-layer").on("click", exit);

    // Pressing ESC key
    $(document).keyup(function(key) {
        if(key.keyCode == 27) {
            exit();
        }
    })

    // Function to fade menu, popup-layer and all popups
	function exit() {
    	$(".popup").fadeOut(500);		
		$menu.slideUp();
		$icon.removeClass("icon-hover");
		$layer.fadeOut();
        $("html").css("overflow", "auto");
    }

    /*--------- News ----------*/
    var $news = $("#news-container");    
    var $news_items = $(".news-item");

    $(".dismiss-news").on("click", dismiss_news);
    function dismiss_news() {
        var $this_news = $(this).parent().parent();

        $this_news.slideUp();
        $this_news.removeClass("active-news");
        if($(".active-news").length == 0) {
            $news.slideUp(500);            
        }
    }

    $("#show-news").on("click", show_news);
    function show_news() {
        $menu.slideUp();
        $icon.removeClass("icon-hover");
        $news.slideDown();
        $news_items.slideDown();
        $news_items.addClass("active-news");
        $layer.fadeOut();
    }

    $("#clear-news").on("click", function() {
        $news.slideUp();
    });
	
	$(".tile-layer").on("click", function() {
		$(".tile-layer").slideUp();
	})
	
})



/*--------- Date tile ----------*/
$(document).ready(function() {
    var today = new Date();
    var codejamDate = new Date();
        codejamDate.setFullYear(2016,10,18); // Nov 18, 2016
    var daysLeft = Math.floor((codejamDate - today) / (1000*60*60*24));

    var $tile_date = $("#tile_date");
    var $content = $tile_date.find(".table");
    var dateArray = new Array(
        "<h1>Nov<span style='font-weight:300;display:block'>18</span></h1>", 
        "<h1 style='line-height:50%;'><span style='font-weight:300;display:block;margin-bottom:1rem;'>"+daysLeft+"</span><span style='font-size:50%;'> days till CodeJam</span></h1>", 
        "<h1>Date</h1>");
    var i = 0;
    setInterval(function() {
        $content.html(dateArray[i].toString());
        i++;
        if(i>dateArray.length-1) { i=0; }
    }, 3000);
})


/*--------- Schedule tile ----------*/
$(document).ready(function() {
    var $tile_schedule = $("#tile-schedule");
    var $day = $tile_schedule.find(".schedule-title");
    var $content = $tile_schedule.find(".schedule-detail");

    $day.on("click", function() {
        var day_id = $(this).attr("data-day");
        $day.removeClass("active-day");
        $(this).addClass("active-day");
        $content.removeClass("active-schedule");
        $(".schedule-"+day_id).addClass("active-schedule");
    })
})


/*--------- Popup "enlarge" button ----------*/
$(document).ready(function() {
	var $enlarge = $("#enlarge");
    var $smaller = $("#smaller");
    $enlarge.on("click", function() {
    	$(this).parent().addClass("enlarged");
    	$enlarge.fadeOut();
    	$smaller.fadeIn();
    })
    $smaller.on("click", function() {
    	$(this).parent().removeClass("enlarged");
    	$smaller.fadeOut();
    	$enlarge.fadeIn();
    })
})



/*--------- Sponsorship banner ----------*/	
$(document).ready(function() {
	var curr = 1;

	var $wheel = $("#wheel");
	var $container = $wheel.find("#frame-collection");
	var $sponsor = $container.find(".frame");	
	
	setInterval(function() {
		var height = "12em";
		$container.animate({"margin-top": "-="+height}, 1000, function() {
			curr++;
			if (curr === $sponsor.length) {
				curr = 0;
				// $container.css("margin-top", "0");
                $container.animate({"margin-top": "12rem"}, 1000);
			}
		});
	}, 3000);
})

$(document).ready(function() {
    var curr = 0;

    var $gallery = $("#gallery-collection");
    var $photos = $gallery.find(".gallery-photos");
    var $photo = $photos.find(".gallery-photo");
    //var width = $images[0].width;
    var width = 100;

    setInterval(function() {        
        $gallery.animate({"margin-left":"-="+width+"%"}, 1000, function() {
            curr++;
            if (curr == $photo.length-1) {
                curr = 0;
                // $gallery.css("margin-left", "0");
                $gallery.delay(3000).animate({"margin-left": "0%"}, 1000);
            }
        });
    }, 3000);
})


// Entrance animation
/*
$(document).ready(function() {
    $("#entrance").delay(4500).animate({"height":"0"}, 1000);
    $("#title-img1").delay(4500).animate({"height":"0", "top":"0", "left":"0"}, 1500);
    

    $("#title-img3").delay(5000).animate({"height":"0", "top":"0", "left":"50%"}, 500);
    $("#title-img4").delay(5000).animate({"height":"0", "top":"0", "left":"50%"}, 500);

    $("#title").delay(4500).animate({"width":"90%", "max-width":"40em"}, 1500);

    timeoutID = window.setTimeout(mask, 5500);
    function mask() {
        $("#entrance").hide();
    }
})
*/

