@layout('layout._main')

@section('css')
@parent
@endsection

@section('js')
@parent
{{ HTML::script('js/backbone/contact.js') }}
@endsection

@section('content')
<div class="container">
	<div class="sixteen columns">
		<h5 id="greeting-header">Send me some E-mail if you'd like.</h5>
	</div>
</div>
<div class="container">
	<div class="four columns">
		<input type="email" style="width:100%;" placeholder="E-mail" id="email" name="E-mail" required>
		<input type="text" style="width:100%;" placeholder="Subject" id="subject" name="Subject" required>
	</div>
	<div class="eight columns">
		<textarea type="text" style="width:100%; height: 200px;" placeholder="Message" id="message" name="Message" required></textarea>
		<button type="submit" id="emailsubmit">Send E-mail</button> <div id="emailresponse" style='margin-left:30px;float:right;margin-top:12px;'> </div>
		<p style="margin-top:20px;">If you'd rather use your own E-mail client, my address is <a href="mailto:berg.ericr@gmail.com">berg.ericr@gmail.com</a>.</p>
	</div> 

</div><!-- container -->

@endsection