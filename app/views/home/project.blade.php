@extends('home.main')

@section('intro')
	<p>Showcasing some of our finest works: <br><span>Projects</span> &amp; <span>Design experiments</span></p>
@stop

@section('subtitle')
	<h2 class="section">Projects</h2>
@stop

@section('static')
	<article>
		<div class="content">
			
			<ul class="jump">
				<li class="item"><a href="#project-leaf"><img src="/asset/img/leaf-img01-thumb.jpg" alt="img"><span>Project Leaf</span></a></li>
				<li class="item"><a href="#project-2dam"><img src="/asset/img/2dam-img01-thumb.jpg" alt="img"><span>Project 2D.am</span></a></li>
			</ul>

			<div class="container" id="project-leaf">	
				<ul class="tab">
					<li class="tab_item"><a href="#">Preview</a></li>
					<li class="tab_item"><a href="#">Logo</a></li>
					<li class="tab_item"><a href="#">Design</a></li>
				</ul>
				<ul class="slide">
					<li class="slide_item"><img src="/asset/img/leaf-img01.jpg" alt=""></li>
					<li class="slide_item"><img src="/asset/img/leaf-img01.jpg" alt=""></li>
					<li class="slide_item"><img src="/asset/img/leaf-img01.jpg" alt=""></li>
				</ul>
			</div>

			<div class="container" id="project-2dam">	
				<ul class="tab">
					<li class="tab_item"><a href="#">Screen 1</a></li>
					<li class="tab_item"><a href="#">Screen 2</a></li>
					<li class="tab_item"><a href="#">Screen 3</a></li>
				</ul>
				<ul class="slide">
					<li class="slide_item"><img src="/asset/img/2dam-img01.jpg" alt=""></li>
					<li class="slide_item"><img src="/asset/img/2dam-img02.jpg" alt=""></li>
					<li class="slide_item"><img src="/asset/img/2dam-img03.jpg" alt=""></li>
				</ul>
			</div>

		</div>
	</article>

	<script type="text/javascript" src="/asset/js/jquery-2.0.3.min.js"></script>
	<script type"text/javascript">
		function TabController(element){
			
			var self = this;
			this.root = $(element);
			
			//trigger
			this.root.find(".tab_item").each(function(){
				self.initTab(this);
			});

			//init
			this.root.find(".tab_item").first().addClass("current");
			this.root.find(".slide_item").hide().first().show();

		}
		TabController.prototype.getTabContentByIndex= function(index){
			return this.root.find(".slide_item").eq(index);
		}
		TabController.prototype.getTabIndex = function(tab){
			return $(tab).index();
		}
		TabController.prototype.initTab = function(tab){
			var self = this;

			$(tab).click(function(){
				$(this).addClass("current").siblings().removeClass("current");
				var index = self.getTabIndex(this);
				var content = self.getTabContentByIndex(index);
				$(content).show().siblings().hide();
				return false;
			});
		}

		$(document).ready(function(){

			var tab_controller = $(".container").each(function(){
				new TabController(this);
			});

		});
	</script>
@stop