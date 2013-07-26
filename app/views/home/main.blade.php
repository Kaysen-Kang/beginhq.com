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
				<li><a href="/team" class="@if($route == 'team') active @endif">Team</a></li>
				<li><a href="/project" class="@if($route == 'project') active @endif">Project</a></li>
				<li><a href="/contact" class="@if($route == 'contact') active @endif">Contact</a></li>
				<li><a href="http://story.beginhq.com/">Story</a></li>
			</ul>
		</nav>
	</header>

	<div class="intro wrap">
		@section('intro')
		@show
	</div>

	<div class="main wrap">

		@section('subtitle')
		@show

		@if(isset($news))
			@foreach ($news as $article)
				<article>
					<header>
						<h2 class="title">{{ $article->title }}</h2>
						<span class="date">{{ date('Y-m-d', $article->created_at->format('U')) }}</span>
					</header>

					<div class="content">
						{{ Markdown::string($article->content) }}
					</div>
				</article>
			@endforeach
		@endif

		@section('static')
		@show

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

<script type="text/javascript" src="http://include.reinvigorate.net/re_.js"></script>
<script type="text/javascript">
try {
reinvigorate.track("z8y49-4985gw2bus");
} catch(err) {}
</script>
</body>
</html>