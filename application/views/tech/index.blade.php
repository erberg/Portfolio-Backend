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
		<h1 class="article-title" style="margin-top:40px;margin-bottom:40px;">Technologies</h1>
		<h5 id="greeting-header">Right Now<br/> </h5>
		<h5 id="greeting-header">In The Near Future<br/> </h5>
		<h5 id="greeting-header">Past Projects<br/> </h5>
	</div>
</div>

@endsection