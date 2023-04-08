<form action="{{ route('addmoney.paypal') }}" method="post">
	@csrf
	<input type="text" name="amount" value="10">

	<button type="submit">Submit</button>
</form>

{{ \Session::get('success')}}
{{ \Session::get('error')}}
