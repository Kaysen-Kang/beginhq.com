@extends('admin.layouts.articles')

@section('content')

    {{ Notification::showAll() }}
	<h1>
        Articles <a href="{{ URL::route('admin.articles.create') }}" class="btn btn-success">Add new article</a>
    </h1>

    <hr>
    <table class="table table-striped">
    	<thead>
    		<tr>
    			<th>id</th>
    			<th>Title</th>
    			<th>Author</th>
    			<th>When</th>
    			<th>operate</th>
    		</tr>
    	</thead>
    	<tbody>
    		@foreach ($articles as $article)
    			<tr>
    				<td>{{ $article->id }}</td>
    				<td><a href="{{ URL::route('admin.articles.show', $article->id) }}">{{ $article->title }}</a></td>
    				<td>{{ $article->author }}</td>
    				<td>{{ $article->created_at }}</td>
    				<td>
    					<a href="{{ URL::route('admin.articles.edit', $article->id) }}">Edit</a>

    					{{ Form::open(array('route' => array('admin.articles.destroy', $article->id), 'method' => 'delete')) }}
    						<button type="submit" href="{{ URL::route('admin.articles.destroy', $article->id) }}" class="btn btn-danger btn-mini">Delete</button>
    					{{ Form::close() }}
    				</td>
    			</tr>
    		@endforeach
    	</tbody>
    </table>
@stop