@layout('layout._main')

@section('css')
@parent
@endsection

@section('js')
@parent
{{ HTML::script('js/helpers/emailform.js') }}
@endsection

@section('content')
<div class="container">
	<div class="sixteen columns">
		<h5 id="greeting-header">Send me some E-mail if you'd like.</h5>
	</div>
</div>
<div class="container">
	<div class="four columns">
		<input type="text" style="width:100%;" value="E-mail" onfocus="EMAILFORM.clearDefault();" id="email" name="E-mail">
		<input type="text" style="width:100%;" value="Subject" onfocus="EMAILFORM.clearDefault();" id="subject" name="Subject">
	</div>
	<div class="eight columns">
		<textarea type="text" style="width:100%; height: 200px;" onfocus="EMAILFORM.clearDefault();" id="message" name="Message"/>Message</textarea>
		<input type="submit" value="Send E-mail"></input>
		<p style="margin-top:30px;">If you'd rather use your own E-mail client, my address is <a href="mailto:berg.ericr@gmail.com">berg.ericr@gmail.com</a>.</p>
	</div> 

</div><!-- container -->

@endsection