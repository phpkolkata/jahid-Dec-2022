@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif



<form action="{{ route('sb') }}" method="post">

    {{-- cross site reference forgery - gendrates a token to secure form data --}}
    @csrf()

    name:<input type="text" name="name"><br>
    Age:<input type="text" name="age"><br>
    <button>Submit</button>

</form>
