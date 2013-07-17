<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="/asset/css/main-0.0.1.css">
	<title>Begin* HQ</title>
</head>
<body class="bg-{{ $route }}">
	<header class="top wrap">
		<div class="header">
			<a href="/" title="back home">
				<h1 class="logo green"><span>Begin</span><span>*</span></h1>
				<p class="tagline green small border">Innovation from the ground up.</p>
			</a>
		</div>

		<nav>
			<ul class="menu">
				<li><a href="/team">Team</a></li>
				<li><a href="/project">Project</a></li>
				<li><a href="/contact">Contact</a></li>
				<li><a href="http://story.beginhq.com/">Story</a></li>
			</ul>
		</nav>
	</header>

	<div class="intro wrap">
		@section('intro')
		@show
	</div>

	<div class="main wrap">

		<h2 class="section">Latest News</h2>

		<article>
			<header>
				<h2 class="title">First Post In Action!</h2>
				<span class="date">2013-07-04</span>
			</header>

			<div class="content">
				<h3>section1</h3>

				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel, dolorum, nihil, excepturi cumque iusto sit voluptatibus quidem illum asperiores labore odio at id repudiandae facere expedita voluptatum earum perspiciatis vitae!</p>

				<h3>section2</h3>

				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, tempore facilis nesciunt voluptatum vero eum vel animi. Laborum, natus minima at voluptate amet veniam tempora nam ullam autem voluptates accusamus.</p>

				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel, neque, ut, nobis quod architecto autem nostrum quos quas quam quasi dolore ipsum fugiat rem alias repellat? Nulla, facere a doloribus.</p>
			</div>
		</article>

		<article>
			<header>
				<h2 class="title">Second Post Incoming!</h2>
				<span class="date">2013-07-05</span>
			</header>

			<div class="content">
				<h3>section1</h3>

				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel, dolorum, nihil, excepturi cumque iusto sit voluptatibus quidem illum asperiores labore odio at id repudiandae facere expedita voluptatum earum perspiciatis vitae!</p>

				<h3>section2</h3>

				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, tempore facilis nesciunt voluptatum vero eum vel animi. Laborum, natus minima at voluptate amet veniam tempora nam ullam autem voluptates accusamus.</p>

				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel, neque, ut, nobis quod architecto autem nostrum quos quas quam quasi dolore ipsum fugiat rem alias repellat? Nulla, facere a doloribus.</p>
			</div>
		</article>
	</div>

	<footer class="wrap">
		<ul class="columns">
			<li>
				<h3>Address</h3>
				<p>No.2077 LianHua Road,<br> FuTian District, Shenzhen,<br> P.R. China</p>
			</li>
			<li>
				<h3>Contact</h3>
				<p>Say hi to <a href="mailto:team@beginhq.com">team@beginhq.com</a></p>
			</li>
			<li>
				<h3>Elsewhere</h3>
				<p>Find us on <a href="https://twitter.com/teambegin">Twitter</a> &amp; <a href="http://weibo.com/teambegin">Weibo</a>!</p>
			</li>
		</ul>
		<div class="copyright">
			<p>&copy; 2013 Begin* Studio | <a href="https://github.com/BeginHQ">Source on Github</a></p>
		</div>
	</footer>
</body>
</html>