$(document).ready(function(e) {
		var $mobile = ($(document).width() < 640 ? true : false);
		var $ancho =  $(document).width();
		var $ambos = $('#top, footer');
		var $side = $('#sidebar, #cerrar');
		var $mt = $('#sidebar').css('margin-top');
		var $tablet = ($(document).width() < 1025 & $(document).width() > 641 ? true : false);
		//alert($mobile);
		if(!$mobile && !$tablet){
    		$('#sidebar, #cerrar').hover(function(){
				$side.stop().animate({'marginLeft': 0}, 600, 'swing');
				$ambos.stop().animate({'marginLeft': 280}, 600, 'swing');
				$('#cerrar').stop().animate({'marginLeft': 270}, 600, 'swing');
				$('.telefono').stop().animate({'marginRight': 280}, 600, 'swing');
				$('#contenido').stop().animate({'marginLeft': 280}, 600, 'swing');
			}, function(){
				$side.stop().animate({'marginLeft': -270}, 600, 'swing');
				$ambos.stop().animate({'marginLeft': 0}, 600, 'swing');
				$('#cerrar').stop().animate({'marginLeft': 0}, 600, 'swing');
				$('.telefono').stop().animate({'marginRight': -0}, 600, 'swing');
				$('#contenido').stop().animate({'marginLeft': 0}, 600, 'swing');
			});

    	}
    	if($mobile){
				$side.click(function(){
				if($mt == '-90px'){
					$side.stop().animate({'marginTop':0});
					$('#cerrar').stop().animate({'marginTop':90});
					$mt = '0px';
				} else {
					$side.stop().animate({'marginTop':-90});
					$('#cerrar').stop().animate({'marginTop':0});
					$mt = '-90px';
				}
			});
    	}

    	if($tablet){

    		$valor = true;
    		$valorDos = false;
    		if($valor){
    			$('#sidebar, #cerrar').on('click', function(){
    				$side.stop().animate({'marginLeft': 0}, 600, 'swing');
					$ambos.stop().animate({'marginLeft': 280}, 600, 'swing');
					$('#cerrar').stop().animate({'marginLeft': 270}, 600, 'swing');
					$('.telefono').stop().animate({'marginRight': 280}, 600, 'swing');
					$('#contenido').stop().animate({'marginLeft': 280}, 600, 'swing');
					$valorDos = true;
					$valor = false;
    			});
    		}

    		if($valorDos){
    			$('#sidebar, #cerrar').on('click', function(){
    				$side.stop().animate({'marginLeft': -270}, 600, 'swing');
					$ambos.stop().animate({'marginLeft': 0}, 600, 'swing');
					$('#cerrar').stop().animate({'marginLeft': 0}, 600, 'swing');
					$('.telefono').stop().animate({'marginRight': -0}, 600, 'swing');
					$('#contenido').stop().animate({'marginLeft': 0}, 600, 'swing');
					$valor = true;
    			});
    		}

    	}

    	if($mobile){
    		
    		var $select = $('#sidebar .menu select');

    		$select.on('change', function(){
    			$option = $(this).val();
    			location.href = $option;
    		});
    	}

    });