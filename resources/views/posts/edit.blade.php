@extends('layout.app')

@section('content')
	<h1>Edit Post</h1>
	{!! Form::open(['action' => ['PostsController@update' ,$post->id], 'method' => 'PUT']) !!}
		<div class="form-group">
			{{Form::text('title', $post->title, ['class' => 'form-conrol', 'placeholder' => 'Title'])}}
		</div>
		<div class="form-group">
			{{Form::textarea('body', $post->body, ['id' => 'article-ckeditor','class' => 'form-control', 'placeholder' => 'Body'])}}
		</div>
		{{Form::hidden('_method','PUT')}}
		{{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
	{!! Form::close() !!}
@endsection