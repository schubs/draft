<div class="row">
	<div class="small-12 column">
		@if($user->displayname)
			<h1>{{ $user->name }} <small>{{ $user->username }}</small></h1>
		@else
			<h1>{{ $user->name }}</h1>
		@endif
	</div>
</div>