$(function() {
	
	function switchSearch() {
		$('.block.position-slideshow .module.type-custom').fadeToggle(200)
		$('.block.position-slideshow .module.type-source:not(:first-child)').fadeToggle(200)
	}
	
	$('.search-trigger__places').addClass('active')
	
	$('.search-trigger').on('click', function() {
		if ($(this).hasClass('active')) return false
		$(this).addClass('active').siblings('.search-trigger').removeClass('active')
		switchSearch()
	})
	
	
	$('#finder').on('submit', function(e) {
		e.preventDefault()
		let query = $(this).find('input[name="finder__query"]').val(),
			cat = $(this).find('select[name="finder__cat"]').val(),
			city = $(this).find('select[name="finder__city"]').val()
		let href = location.origin + '/searching?',
			params = new URLSearchParams(href.search)
		
		if (query) {
			params.append('query', query)
		}
		
		if (city) {
			params.append('city', city)
		}
		
		if (cat) {
			params.append('cat', cat)
		}
		
		location.href = href + params.toString()
	})
	
	
	sessvars.saveoutpage = "/";
	$('.closesearchout').click(
    	function(){ 
			window.location.href = sessvars.saveoutpage;
		}
    	
	);
	
/**/
	
	$('.block.position-menu .module.type-menu li:nth-child(1)').hover(
    	function(){ 
			if(!sessvars.open) {
				$('.label1').addClass('block'); 
			}
		},
    	function(){ $('.label1').removeClass('block'); }
	);
	$('.block.position-menu .module.type-menu li:nth-child(2)').hover(
    	function(){ 
			if(!sessvars.open) {
				$('.label2').addClass('block'); 
			}
		},	
    	function(){ $('.label2').removeClass('block'); }
	);
	$('.block.position-menu .module.type-menu li:nth-child(3)').hover(
    	function(){ 
			if(!sessvars.open) {
				$('.label3').addClass('block'); 
			}
		},
    	function(){ $('.label3').removeClass('block'); }
	);
	$('.block.position-menu .module.type-menu li:nth-child(4)').hover(
    	function(){ 
			if(!sessvars.open) {
				$('.label4').addClass('block'); 
			}
		},
    	function(){ $('.label4').removeClass('block'); }
	);
	$('.block.position-menu .module.type-menu li:nth-child(5)').hover(
    	function(){ 
			if(!sessvars.open) {
				$('.label5').addClass('block'); 
			}
		},
    	function(){ $('.label5').removeClass('block'); }
	);
	$('.block.position-menu .module.type-menu li:nth-child(6)').hover(
    	function(){ 
			if(!sessvars.open) {
				$('.label6').addClass('block'); 
			}
		},
    	function(){ $('.label6').removeClass('block'); }
	);
	$('.block.position-menu .module.type-menu li:nth-child(7)').hover(
    	function(){ 
			if(!sessvars.open) {
				$('.label7').addClass('block'); 
			}
		},
    	function(){ $('.label7').removeClass('block'); }
	);	
	
/*меню для мобильных устройств*/
	window.onload = function () {
		
		//проверям куки и обрабатываем интерфейс
		if(sessvars.open) {
			$(".block.position-holiday .grid-col.position-left").width("165");
			$('#open').addClass('active');
			$(".iconmenu").hide();
		}
		//
		var elem = document.getElementById('open');
		elem.onclick = function() {
			
		
			var h = $(".block.position-menu_mobile .type-menu").height();
			if(h == 0) {
		    $(".block.position-menu_mobile .type-menu").animate({height:"400"},"fast");
				} else {
				  $(".block.position-menu_mobile .type-menu").animate({height:"0"},"fast");	
			    }
			
			var w = $(".block.position-holiday .grid-col.position-left").width();
			if(w == 65) {
				$(".block.position-holiday .grid-col.position-left").animate({width:"165"},"fast"); 
				//добавляем куки и удаляем подсказки
				sessvars.open = 1;
				$(".iconmenu").hide();
				//
				} else {
				$(".block.position-holiday .grid-col.position-left").animate({width:"65"},"fast");
				//удаляем куки и показываем подсказки
				sessvars.open = '';
				$(".iconmenu").show();
				//	 	
			 	}		
			
   			if(elem.className ==='rd-mobilepanel_toggle') {
	  			$('#open').addClass('active');
   			} 
			else {
    		 	$('#open').removeClass('active');
  			}
		}
		
		
		//поиск
		// чтобы не загрывалось окно поиска при переходе на другие страницы
		// отпала нужда так как при уходе со страницы search результаты поиска пропадают
		/*if(sessvars.opensearch  == 1) {
			$(".block.position-search_in").width("400");
			$('#opensearch').addClass('active');
			$('.block.position-search_in .type-source').addClass('active');
		}*/
		$( ".hashtag" ).click(function() {
			sessvars.saveoutpage = document.location.href;
		});
		
		var elem_search = document.getElementById('opensearch');
		elem_search.onclick = function() {
			
			
			var s = $(".block.position-search_in").width();
			if(s == 0) {
		    	$(".block.position-search_in").animate({width:"400"},"fast");
				//sessvars.opensearch = 1;
				sessvars.saveoutpage = document.location.href; 
				} else {
				  	$(".block.position-search_in").animate({width:"0"},"fast");	
					//sessvars.opensearch = 0; 
					sessvars.saveoutpage = ""; 
			   	}	
			
   			if(elem_search.className ==='opensearch') {
	  			$('#opensearch').addClass('active');
				$('.block.position-search_in .type-source').addClass('active');
   			} 
			else {
    		 	$('#opensearch').removeClass('active');
				$('.block.position-search_in .type-source').removeClass('active');
  			}
		}
		
		var elem_search_close = document.getElementById('closesearch');
		elem_search_close.onclick = function() {
			
		    	
				  	$(".block.position-search_in").animate({width:"0"},"fast");	
			   	sessvars.opensearch = 0; 
   			if(elem_search_close.className ==='closesearch') {
	  			$('#opensearch').removeClass('active');
				$('.block.position-search_in .type-source').removeClass('active');
   			} 
		}
		
		
	}
	
	
	
	
	var top_show = 150; // В каком положении полосы прокрутки начинать показ кнопки "Наверх"
  	var delay = 1000; // Задержка прокрутки
  $(document).ready(function() {
    $(window).scroll(function () { // При прокрутке попадаем в эту функцию
      /* В зависимости от положения полосы прокрукти и значения top_show, скрываем или открываем кнопку "Наверх" */
      if ($(this).scrollTop() > top_show) $('#top').fadeIn();
      else $('#top').fadeOut();
    });
    $('#top').click(function () { // При клике по кнопке "Наверх" попадаем в эту функцию
      /* Плавная прокрутка наверх */
      $('body, html').animate({
        scrollTop: 0
      }, delay);
    });
  });
	
});
