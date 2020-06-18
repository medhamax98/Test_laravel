<h1>Consumer Details</h1>
<div>
    <a href="/consumers">Back</a>
</div>

<strong>Name</strong>
<p>{{ $consumer->name }}</p>

<strong>Email</strong>
<p>{{ $consumer->email }}</p>

<div>
    <a href="/consumers/{{ $consumer->id }}/edit">Edit</a>

    <form action="/consumers/{{ $consumer->id }}" method="post">
        @method('DELETE')
        @csrf

        <button>Delete</button>

    </form>
</div>