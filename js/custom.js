	$(function(){
		var count = 1;
		var total = $('ul#thumbs li').length;
		
		$('ul#thumbs li img').mousedown(function(){
			var tempId = $(this).attr('id');
			count = Number(tempId);
			var path = $(this).attr('src');
			var cap = $(this).attr('alt');
			swapImage(path, cap);
		});
		
		$('#back').mousedown(function(){
			count--;
			if (count < 1){
				count = total;
			}
			var path = $('#' + count).attr('src');
			var cap = $('#' + count).attr('alt');
			swapImage(path, cap);
		});
		
		$('#next').mousedown(function(){
			count++;
			if (count > total){
				count = 1;
			}
			var path = $('#' + count).attr('src');
			var cap = $('#' + count).attr('alt');
			swapImage(path, cap);
		});
		
		$('#close').mousedown(function(){
			$('#msg').hide();
		});
		
		function swapImage(path, cap) {
			$('#lr').hide();
			
			var tempStr = "images/" + path.substr(14);
			
			$('#lr').attr('src', tempStr);
			$('img#lr').attr('alt', cap);
			$('#caption').html(cap);
			
			$('#lr').fadeIn('slow');
			$('#msg').fadeIn('slow');
			
			toggleSelected('#' + count);
		}
		
		function toggleSelected(me){
			$('*').removeClass('selected');
			$(me).addClass('selected');
		}
	});
	
	//Portfolio Main
	
	$(function(){

	$('#brand').click(function(){showHide('brand'); toggleSelected(this);});
	$('#web').click(function(){showHide('web'); toggleSelected(this);});
	$('#print').click(function(){showHide('print'); toggleSelected(this);});

	
	$('#all').click(function(){showAll(); toggleSelected(this);});
	
	
	function showHide(target)
	{
		$('.scale-with-grid').each(function(){
			if($(this).hasClass(target)){
				$(this).show('slow');
			}else{
				$(this).hide('slow');
			}
	});
	}
	
	function showAll()
	{
		$('.item').each(function(){
			$(this).show('slow');
			});
	}
	
	function toggleSelected(me)
	{
		$('div#filters ul li a').each(function(){
			$(this).removeClass();
		});
			$(me).addClass('selected');
	}
});	

	$(function(){
		var expand = true;
		
		$('ul.expando li').click(function(){
			$(this).children('.desc').slideToggle('slow');
			
			if ($(this).children('.toggleicon').attr('src') == 'images/collapse.png'){
				$(this).children('.toggleicon').attr('src', 'images/expand.png');
			} else {
				$(this).children('.toggleicon').attr('src', 'images/collapse.png');
			}
		});
		
		$('#expall').click(function(){
			$('ul.expando li div.desc').slideDown();
			expanded = true;
			toggleIcon();
		});
		
		$('#colall').click(function(){
			$('ul.expando li div.desc').slideUp();
			expanded = false;
			toggleIcon();
		});
		
		function toggleIcon(){
			if (expanded == true){
				$('ul.expando li .toggleicon').attr('src', 'images/collapse.png');
			} else {
				$('ul.expando li .toggleicon').attr('src', 'images/expand.png');
			}
		}
	});