@layout('layout._main')

@section('css')
@parent
@endsection

@section('content')

<div class="container">
	<div class="sixteen columns">
		<h5 id="greeting-header">Hello! <br/> 
			<span id="greeting-sub">I’m a web developer living in Seattle, Washington. I love to code, and I’m always excited to improve my skills and work with new technology. These are some of my most recent projects.</span>
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

@section('js')
@parent
{{ HTML::script('js/base.js') }}
@endsection