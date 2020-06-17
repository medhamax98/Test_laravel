<h1>Consumers</h1>

<a href="/consumers/create">add new customer</a>

@foreach( $consumers as $consumer )
    <p><strong>{{ $consumer->name }}<strong> ({{ $consumer->email }})

@endforeach;