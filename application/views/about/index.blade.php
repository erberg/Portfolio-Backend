@layout('layout._main')

@section('css')
@parent
@endsection

@section('js')
@parent
@endsection

@section('content')

<div class="container">
	<div class="sixteen columns">
		<h5 id="greeting-header">About me<br>
			<div style='float:right;margin-top:20px;margin-left:40px;'><img src="img/eric.jpg" width="240px"/></div>
			<span id="greeting-sub">
				<p>I work hard to make the Internet better. Whether front or back-end programming, it's my passion to create great web applications using the latest standards and technology. My dedication to self-learning makes me well-suited to this quickly evolving field, and my formal education in engineering and art combine to give me an expert eye for both function and aesthetics. </p>
				<p>When I'm not researching new and exciting technologies, I like to spend my free time exploring nature, going to concerts, or creating hideous noises with a guitar.</p>
				<p>If you'd like to work with me, or learn more about what I do, just <a href="{{URL::to_route('contact')}}">let me know</a>.</p>
			</span>
		</h5>
	</div>
</div>
<div class="container" id="article-content">&nbsp;</div>
<script id="articleTemplate" type="text/template">
	<div class="container article-container">
		<div class="three columns">
			<h1 class="article-title"><%= title %></h1>
			<h4 class="article-sub"><%= subtitle %></h4>
		</div>
		<div class="six columns"><%= content %>
			<div style="margin-bottom:10px;">
				<a href="<%= url_to_live %>" style="margin-right:30px;">View the site</a>
				<% if (url_to_code) { %> <a href="<%= url_to_code %>">See the code</a> <% } %> 
			</div>
		</div>

		<div class="seven columns"><div class="article-image"><img src="<%= img_location %>" alt="Artist Portfolio Website"/></div></div>
		<div class="two columns"><ul class="square"><%= tech_list %></ul></div>
	</div><!-- container -->
</script>

<script id="articleTemplateAlt" type="text/template">
	<div class="container article-container">
		<div class="three columns">
			<h1 class="article-title"><%= title %></h1>
			<h4 class="article-sub"><%= subtitle %></h4>
		</div>
		<div class="five columns"><%= content %>
			<div style="margin-bottom:10px;">
				<a href="<%= url_to_live %>" style="margin-right:30px;">View the site</a>
				<% if (url_to_code) { %> <a href="<%= url_to_code %>">See the code</a> <% } %>
			</div>
		</div>
		<div class="six columns"><div class="article-image"><img src="<%= img_location %>" alt="Artist Portfolio Website"/></div></div>
		<div class="two columns"><ul class="square"><%= tech_list %></ul></div>
	</div><!-- container -->
</script>

@endsection