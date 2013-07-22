@extends('publish.base')

@section('intro')
	<span>YES</span>
@stop

@section('main')
	<h2 class="section">Publish</h2>

	<article>

		<span class="notice">{{ Notification::showAll() }}</span>
	
		<div class="content">

			<table class="table col5 striped">
				<thead>
					<tr>
						<th>Id</th>
						<th>Title</th>
						<th>Author</th>
						<th>When</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($articles as $article)
						<tr>
							<td>{{ $article->id }}</td>
							<td><a href="{{ URL::route('publish.show', $article->id) }}">{{ $article->title }}</a></td>
							<td>{{ $article->author }}</td>
							<td>{{ $article->created_at }}</td>
							<td>
								<a class="button" href="{{ URL::route('publish.edit', $article->id) }}">Edit</a>
								{{ Form::open(array('route' => array('publish.destroy', $article->id), 'method' => 'delete', 'class' => 'inline')) }}
    								<button type="submit" class="btn btn-danger btn-mini">Delete</button>
    							{{ Form::close() }}
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>

		</div>

	</article>
@stop