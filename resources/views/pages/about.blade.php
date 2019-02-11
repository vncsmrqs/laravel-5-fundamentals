
@extends('app')

@section('content')

<h1>About</h1>
@if (count($people))
<h3>People I like:</h3>
    <ul>
        @foreach ($people as $person)
            <li>{{ $person }}</li>
        @endforeach
    </ul>
@endif
<p>
    Nostrud irure qui amet qui exercitation officia irure in elit. Do proident ipsum anim do occaecat et eu eu elit dolor consectetur. Eiusmod amet sunt velit velit eiusmod cupidatat qui dolor labore duis adipisicing minim amet incididunt. Mollit aliquip ullamco deserunt Lorem fugiat adipisicing ipsum dolore sint qui culpa Lorem magna. In velit voluptate Lorem culpa nisi fugiat aute ipsum et non veniam consequat. Qui laboris in quis ea.
</p>
@endsection
    