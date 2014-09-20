<div class="row">
	<div class="small-12 column">
		<h1>{{ $league->name }}</h1>
	</div>
</div>


<div class="row">
	<div class="medium-6 column">
		<h4>About</h4>
		<p>
			{{{ $league->description }}}
		</p>
		@if($league->url)
			<p><a href="{{{ $league->url }}}">{{{ $league->url }}}</a></p>
		@endif
	</div>
	<div class="medium-3 column">
		<h4>League Settings</h4>
		<ul class="no-bullet">
			<li>Mode: {{ $league->mode }}</li>
			<li>Money: {{ $league->money }}{{ $league->units }}</li>
		</ul>
	</div>
	<div class="medium-3 column">
		<h4>Admins</h4>
		<ul class="no-bullet">
			@foreach($league->admins as $user)
				<li><a href="{{ route('user.show', ['user' => $user->username]) }}">{{ $user->username }}</a></li>
			@endforeach
		</ul>
	</div>
</div>

@unless($league->active || Auth::guest() || !$league->userIsAdmin(Auth::user()))
	<div class="row">
		<div class="small-12">
			<div data-alert class="alert-box warning" role="alert">
				<p><strong>Your league isn't active yet</strong> <small>But it's ok</small></p>
				<p>In order for a league to be considered to be active you must do the following:</p>

				<ul>
					<li>Add movies to your league</li>
					<li>Add teams to your league</li>
					<li>Draft your movies to the teams</li>
				</ul>
			</div>
		</div>
	</div>
@endunless

<div class="row">
	<div class="medium-3 column">
<?php
$navs = [
	['text' => 'Home', 'url' => route('league.show', ['league' => $league->slug])],
	'divider',
	['text' => 'League Admin'],
];
?>
		<nav>
			<ul class="side-nav">
					@include('partials.nav', ['items' => $navs])
			</ul>
		</nav>
	</div>
	<div class="medium-9 column">
		@yield('layout.content')
	</div>
</div>

