<div class="row">
	<div class="small-12 column">
		{{ Former::vertical_open()->route('auth.register')->rules($validation_rules) }}
			<div class="row">
				{{ Former::text('displayname')->addGroupClass('medium-4 column') }}
			</div>
			<div class="row">
				{{ Former::text('email')->addGroupClass('medium-4 column') }}
			</div>
			<div class="row">
				{{ Former::text('username')->addGroupClass('medium-4 column') }}
			</div>
			<div class="row">
				{{ Former::password('password')->addGroupClass('medium-4 column') }}
			</div>
			{{-- {{ Former::uneditable('email')->help('registration.help.email', ['class' => 'alert-box info'])->forceValue($email) }} --}}
			{{ Former::actions()
				->submit('Register')
				->reset(null, null, ['class' => 'secondary'])
				->link('Cancel Registration', '#', ['data-persona' => 'logout', 'class' => 'secondary'])
			}}

		{{ Former::close() }}
	</div>
</div>

