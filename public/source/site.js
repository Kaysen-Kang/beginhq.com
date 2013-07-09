(function(){

	onDomReady(function() {

		//do not run javascript for older browser
		if(!Element.prototype.addEventListener)
			return;

		//reset hash if exist, now that we have javascript to handle slider
		if(!!window.location.hash) {

			window.location.hash = '';

		}

		//slider
		var swiper = new Swipe($('#slider'), {
			startSlide: 0,
			speed: 400,
			auto: 0,
			continuous: false,
			disableScroll: false,
			stopPropagation: false,
			//callback: function(index, elem) {},
			//transitionEnd: function(index, elem) {}
		});

		//slider nav control
		var links = $('.slide-control');
		for (var i = 0; i < links.length; ++i) {
			
			var item = links[i];
			item.addEventListener('click', function(e){
				
				e.preventDefault();

				var active = $('.slide-control-active');
				if(active.length == 1)
					active[0].classList.remove('slide-control-active');

				e.currentTarget.classList.add('slide-control-active');

				swiper.slide(e.currentTarget.getAttribute('data-slide'), 500);

			});

		}

		//overlay
		var cover = $('#cover');
		cover.addEventListener('click', function(e){
			cover.classList.add('hide');
		});

		//image link
		var imglinks = $('.img');
		for (var j = 0; j < imglinks.length; ++j) {
			
			var imglink = imglinks[j];

			imglink.addEventListener('click', function(e){

				if(e.currentTarget.href.indexOf('/asset/img/') != -1
					&& document.documentElement.clientWidth > 600
					&& document.documentElement.clientHeight > 400) {

					e.preventDefault();

					var active = $('img', cover)[0];
					active.src = '/asset/img/holder.png';
					active.src = e.currentTarget.href;

					cover.classList.remove('hide');

				}
				
			});

		}

		//language select
		var lang = $('#lang');
		lang.addEventListener('mouseout', function(){
			lang.classList.remove('init');
		});
		setTimeout(function(){
			lang.classList.remove('init');
		}, 3000);

		//old ie nag
		var ienag = $('#ienag');
		ienag.addEventListener('click', function(e){
			ienag.classList.add('hide');
		});

	});

})();