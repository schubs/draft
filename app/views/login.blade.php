<div class="row">
	<div class="small-12 column">
		{{ Former::vertical_open()->route('auth.login')->rules($validation_rules) }}
			<div class="row">
				{{ Former::text('email')->addGroupClass('medium-4 column') }}
			</div>
			<div class="row">
				{{ Former::password('password')->addGroupClass('medium-4 column') }}
			</div>
			{{ Former::actions()
				->submit('Login')
				->reset(null, null, ['class' => 'secondary'])
				->link('Register', route("auth.register.form" ), ['class' => 'secondary'])
			}}

		{{ Former::close() }}
	</div>
</div>