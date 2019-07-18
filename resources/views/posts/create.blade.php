@extends('layout.app')

@section('content')
	<h1>Create Post</h1>
	{!! Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}
		<div class="form-group">
			{{Form::text('title', '', ['class' => 'form-conrol', 'placeholder' => 'Title'])}}
		</div>
		<div class="form-group">
			{{Form::textarea('body', '', ['id' => 'article-ckeditor','class' => 'form-control', 'placeholder' => 'Body'])}}
		</div>
		{{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
	{!! Form::close() !!}
@endsection