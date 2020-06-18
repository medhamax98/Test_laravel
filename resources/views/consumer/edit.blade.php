<h1>Edit Customer Details</h1>


<form action="/consumers/{{ $consumer->id }}" method="post">

    @method('PATCH')

    @include('consumer.form')
    <button>Save customer</button>

</form>