<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="/asset/css/main-0.0.1.css">
	<title>Begin* HQ</title>
</head>
<body class="bg-blog">
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
		<p>Checking... Are you an Admin?<br> <span>YES</span></p>
	</div>	

	<div class="main wrap">

		<h2 class="section">Publish</h2>

		<article>
			<div class="content">

				<table class="table col5 striped">
					<thead>
						<tr>
							<th>Id</th>
							<th>Title</th>
							<th>Author</th>
							<th>When</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($articles as $article)
							<tr>
								<td>{{ $article->id }}</td>
								<td><a href="#">{{ $article->title }}</a></td>
								<td>{{ $article->author }}</td>
								<td>{{ $article->created_at }}</td>
								<td><a href="#">Edit</a></td>
							</tr>
						@endforeach
					</tbody>
				</table>

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