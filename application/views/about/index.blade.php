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
		<h5 id="greeting-header">A little about me.</h5>
	</div>
</div>

<div class="container article-container">
	<div class="eight columns">
			<p>I work hard to make make great applications for the web. Whether front or back-end programming, it's my passion to create great web applications using the latest standards and technology. My dedication to self-learning makes me well-suited to this quickly evolving field, and my formal education in engineering and art combine to give me an expert eye for both function and aesthetics. </p>
			<p>When I'm not researching new and exciting technologies, I like to spend my free time exploring nature, going to concerts, or creating hideous noises with my guitar.</p>
			<p>If you'd like to work with me, or learn more about what I do, just <a href="{{URL::to_route('contact')}}">let me know</a>.</p>
	</div>

	<div class="five columns"><div style='float:right;'><img src="img/eric.jpg" class="scale-with-grid" alt="A picture of Eric Berg."/></div></div>

</div><!-- container -->


@endsection