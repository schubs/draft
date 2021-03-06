@extends('layout.league')

@section('layout.content')

	<div class="row">
		<div class="small-6 column">
			<h2>Movies</h2>
		</div>
		<div class="small-6 column">
			<a class="button right small" href="{{ route('league.admin.movies.add', ['league' => $league->slug]) }}"><i class="fa fa-plus"></i> Add movies</a>
		</div>
	</div>


	{{ Form::open(['route' => ['league.admin.movies.remove', 'league' => $league->slug]]) }}

		<table>
			<thead>
				<tr>
					<th>Movie</th>
					<th class="small-3 medium-3 large-2">Actions</th>
				</tr>
			</thead>
			<tbody>
				@forelse($league->movies as $movie)
					<tr>
						<td>
							<strong>{{ $movie->movie->name }}</strong><br />
							<em>Release: {{ $movie->movie->release->toFormattedDateString() }}</em>
						</td>
						<td>
							<ul class="button-group">
								<li><a href="javascript:void(0);" class="button tiny disabled" title="Ability to switch movies isn't currently available."><i class="fa fa-exchange"></i></a></li>
								<li><button class="tiny alert" type="submit" name="movie" value="{{ $movie->id }}" title="Remove movie"><i class="fa fa-remove"></i></button></li>
							</ul>
						</td>
					</tr>
				@empty
					<tr>
						<td colspan="2">No movies</td>
					</tr>
				@endforelse
			</tbody>

		</table>

	{{ Form::close() }}


@endsection