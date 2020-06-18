<h1>Consumers</h1>

<a href="/consumers/create">Add new customer</a>
<a href="/consumers?active=1">Active</a>
<a href="/consumers?active=0">Inactive</a>

@foreach( $consumers as $consumer )
    <p><strong>
    <a href="consumers/{{ $consumer->id }}">{{ $consumer->name }}</a>
    </strong> ({{ $consumer->email }})</p>

@endforeach