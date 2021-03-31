@extends('layouts.layout')

@section('content')
    <section class="py-5 container">
        <div class="row py-lg-5">
            <div class="col-lg-12 col-md-8 mx-auto">
                <h1>Add new courier</h1>
                <form action="{{ route('couriers.store') }}" method="post">
                    @csrf
                    @method('post')
                    <label for="name">Name: </label><input type="text" name="name" id="name">
                    <br>
                    <label for="surname">Surname: </label><input type="text" name="surname" id="surname">
                    <br>
                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </section>
@endsection
</body>
</html>
