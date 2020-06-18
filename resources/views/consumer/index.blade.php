<h1>Consumers</h1>

<a href="/consumers/create">add new customer</a>

@foreach( $consumers as $consumer )
    <p><strong>
    <a href="consumers/{{ $consumer->id }}">{{ $consumer->name }}</a>
    </strong> ({{ $consumer->email }})</p>

@endforeach