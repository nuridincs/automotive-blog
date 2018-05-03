<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/custom.css">
    <title>Dojomania.com</title>
</head>
<body>
<div class="blog-head">
	<div class="card">
		<div class="card-body">
			This is some text within a card body.
		</div>
	</div>
</div>
<div class="blog-head-leads">
		<div>
			Auto Info
		</div>
	<div class="wrapper-form-leads">
		<div class="card-body">
			<div>
				<span style="color:#cf9503;">Beli Mobil / Motor Online</span><br>
				<span style="color:#000;font-size:15px;">Isi Data Anda</span>
			</div>
			<form>
				<div class="row" style="margin: auto;padding: 10px;">
					<div class="col">
						<input type="text" class="form-control" placeholder="First name">
					</div>
					<div class="col">
						<input type="text" class="form-control" placeholder="Last name">
					</div>
					<div class="col">
						<input type="text" class="form-control" placeholder="Last name">
					</div>
					<div class="col">
						<a href="#" class="btn btn-primary btn-sm" style="background-color: #cf9503;border: none;">Submit</a>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<div class="blog-masthead">
	<div class="container">
		<nav class="nav blog-nav">
            <a class="nav-link active" href="https://themes.gohugo.io/theme/hugo-theme-bootstrap4-blog/">Home</a>
            <a class="nav-link" href="https://themes.gohugo.io/theme/hugo-theme-bootstrap4-blog/">Mobil</a>
            <a class="nav-link" href="https://themes.gohugo.io/theme/hugo-theme-bootstrap4-blog/">Motor</a>
		</nav>
	</div>
</div>
<header class="blog-header">
<div class="container">
	<h1 class="blog-title"><a href="https://themes.gohugo.io/theme/hugo-theme-bootstrap4-blog/" rel="home">Hugo Bootstrap v4 Blog</a></h1>
	<p class="lead blog-description">
		A simple Hugo theme based on the Bootstrap v4 blog example.
	</p>
</div>
</header>
<div class="container">
	<div class="row">
		<div class="col-sm-8 blog-main">
			<article class="blog-post">
			<header>
			<h2 class="blog-post-title"><a href="https://themes.gohugo.io/theme/hugo-theme-bootstrap4-blog/2014/09/creating-a-new-theme/">Creating a New Theme</a></h2>
			<p class="blog-post-meta">
				<time datetime="2014-09-28T00:00:00Z">Sun Sep 28, 2014</time> by Michael Henderson
			</p>
			</header>
			Introduction This tutorial will show you how to create a simple theme in Hugo. I assume that you are familiar with HTML, the bash command line, and that you are comfortable using Markdown to format content. I&rsquo;ll explain how Hugo uses templates and how you can organize your templates to create a theme. I won&rsquo;t cover using CSS to style your theme. We&rsquo;ll start with creating a new site with a very basic template. <a href='https://themes.gohugo.io/theme/hugo-theme-bootstrap4-blog/2014/09/creating-a-new-theme/'>Read more →</a>
			</article>
			<article class="blog-post">
			<header>
			<h2 class="blog-post-title"><a href="https://themes.gohugo.io/theme/hugo-theme-bootstrap4-blog/2014/03/migrate-to-hugo-from-jekyll/">Migrate to Hugo from Jekyll</a></h2>
			<p class="blog-post-meta">
				<time datetime="2014-03-10T00:00:00Z">Mon Mar 10, 2014</time> by Your Name
			</p>
			</header>
			Move static content to static Jekyll has a rule that any directory not starting with _ will be copied as-is to the _site output. Hugo keeps all static content under static. You should therefore move it all there. With Jekyll, something that looked like ▾ &lt;root&gt;/ ▾ images/ logo.png should become ▾ &lt;root&gt;/ ▾ static/ ▾ images/ logo.png Additionally, you&rsquo;ll want any files that should reside at the root (such as CNAME) to be moved to static. <a href='https://themes.gohugo.io/theme/hugo-theme-bootstrap4-blog/2014/03/migrate-to-hugo-from-jekyll/'>Read more →</a>
			</article>
			<article class="blog-post">
			<header>
			<h2 class="blog-post-title"><a href="https://themes.gohugo.io/theme/hugo-theme-bootstrap4-blog/2014/04/hugo-template-primer/">(Hu)go Template Primer</a></h2>
			<p class="blog-post-meta">
				<time datetime="2014-04-02T00:00:00Z">Wed Apr 02, 2014</time> by Your Name in <i class="fa fa-folder" aria-hidden="true"></i>&nbsp;<a href="https://themes.gohugo.io/theme/hugo-theme-bootstrap4-blog/categories/development" rel="category tag">Development</a>, <a href="https://themes.gohugo.io/theme/hugo-theme-bootstrap4-blog/categories/golang" rel="category tag">golang</a>
				<i class="fa fa-tag" aria-hidden="true"></i>&nbsp;<a href="https://themes.gohugo.io/theme/hugo-theme-bootstrap4-blog/tags/go" rel="tag">go</a>, <a href="https://themes.gohugo.io/theme/hugo-theme-bootstrap4-blog/tags/golang" rel="tag">golang</a>, <a href="https://themes.gohugo.io/theme/hugo-theme-bootstrap4-blog/tags/templates" rel="tag">templates</a>, <a href="https://themes.gohugo.io/theme/hugo-theme-bootstrap4-blog/tags/themes" rel="tag">themes</a>, <a href="https://themes.gohugo.io/theme/hugo-theme-bootstrap4-blog/tags/development" rel="tag">development</a>
			</p>
			</header>
			Hugo uses the excellent go html/template library for its template engine. It is an extremely lightweight engine that provides a very small amount of logic. In our experience that it is just the right amount of logic to be able to create a good static website. If you have used other template systems from different languages or frameworks you will find a lot of similarities in go templates. This document is a brief primer on using go templates. <a href='https://themes.gohugo.io/theme/hugo-theme-bootstrap4-blog/2014/04/hugo-template-primer/'>Read more →</a>
			</article>
			<article class="blog-post">
			<header>
			<h2 class="blog-post-title"><a href="https://themes.gohugo.io/theme/hugo-theme-bootstrap4-blog/2014/04/getting-started-with-hugo/">Getting Started with Hugo</a></h2>
			<p class="blog-post-meta">
				<time datetime="2014-04-02T00:00:00Z">Wed Apr 02, 2014</time> by Your Name in <i class="fa fa-folder" aria-hidden="true"></i>&nbsp;<a href="https://themes.gohugo.io/theme/hugo-theme-bootstrap4-blog/categories/development" rel="category tag">Development</a>, <a href="https://themes.gohugo.io/theme/hugo-theme-bootstrap4-blog/categories/golang" rel="category tag">golang</a>
				<i class="fa fa-tag" aria-hidden="true"></i>&nbsp;<a href="https://themes.gohugo.io/theme/hugo-theme-bootstrap4-blog/tags/go" rel="tag">go</a>, <a href="https://themes.gohugo.io/theme/hugo-theme-bootstrap4-blog/tags/golang" rel="tag">golang</a>, <a href="https://themes.gohugo.io/theme/hugo-theme-bootstrap4-blog/tags/hugo" rel="tag">hugo</a>, <a href="https://themes.gohugo.io/theme/hugo-theme-bootstrap4-blog/tags/development" rel="tag">development</a>
			</p>
			</header>
			Step 1. Install Hugo Goto hugo releases and download the appropriate version for your os and architecture. Save it somewhere specific as we will be using it in the next step. More complete instructions are available at installing hugo Step 2. Build the Docs Hugo has its own example site which happens to also be the documentation site you are reading right now. Follow the following steps: Clone the hugo repository Go into the repo Run hugo in server mode and build the docs Open your browser to http://localhost:1313 Corresponding pseudo commands: <a href='https://themes.gohugo.io/theme/hugo-theme-bootstrap4-blog/2014/04/getting-started-with-hugo/'>Read more →</a>
			</article>
			<article class="blog-post">
			<header>
			<h2 class="blog-post-title"><a href="https://themes.gohugo.io/theme/hugo-theme-bootstrap4-blog/post/">Posts</a></h2>
			<p class="blog-post-meta">
				<time datetime="2014-09-28T00:00:00Z">Sun Sep 28, 2014</time> by Your Name
			</p>
			</header>
			<a href='https://themes.gohugo.io/theme/hugo-theme-bootstrap4-blog/post/'>Read more →</a>
			</article>
		</div>
		<!-- /.blog-main -->
		<aside class="col-sm-3 ml-auto blog-sidebar">
		<section class="sidebar-module sidebar-module-inset">
		<h4>About</h4>
		<p>
			A simple Hugo theme based on the <a href="http://v4-alpha.getbootstrap.com/examples/blog/">Bootstrap v4 blog example</a>.
		</p>
		</section>
		<section class="sidebar-module">
		<h4>Recent Posts</h4>
		<ol class="list-unstyled">
			<li>
				<a href="https://themes.gohugo.io/theme/hugo-theme-bootstrap4-blog/2014/09/creating-a-new-theme/">Creating a New Theme</a>
			</li>
			<li>
				<a href="https://themes.gohugo.io/theme/hugo-theme-bootstrap4-blog/2014/03/migrate-to-hugo-from-jekyll/">Migrate to Hugo from Jekyll</a>
			</li>
			<li>
				<a href="https://themes.gohugo.io/theme/hugo-theme-bootstrap4-blog/2014/04/hugo-template-primer/">(Hu)go Template Primer</a>
			</li>
			<li>
				<a href="https://themes.gohugo.io/theme/hugo-theme-bootstrap4-blog/2014/04/getting-started-with-hugo/">Getting Started with Hugo</a>
			</li>
			<li>
				<a href="https://themes.gohugo.io/theme/hugo-theme-bootstrap4-blog/post/">Posts</a>
			</li>
		</ol>
		</section>
		<section class="sidebar-module">
		<h4>Links</h4>
		<ol class="list-unstyled">
			<li>
				<a href="https://example.com">Link 1</a>
			</li>
			<li>
				<a href="https://example.org">Link 2</a>
			</li>
		</ol>
		</section>
		</aside>
	</div>
	<!-- /.row -->
</div>
<!-- /.container -->
<footer class="blog-footer">
<p>
	 Blog template created by <a href="https://twitter.com/mdo">@mdo</a>, ported to Hugo by <a href='https://twitter.com/mralanorth'>@mralanorth</a>.
</p>
<p>
	<a href="#">Back to top</a>
</p>
</footer> 
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>