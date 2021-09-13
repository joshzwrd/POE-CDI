@extends('layout')

@section('page-title')
Compte a rebours
@endsection
    
@section('content')

<h1>Compte à rebours</h1>
<h1>{{$idcount}}</h1>

<p id="count"></p>

<script>

    let count = {{$idcount}};

    // while (count > 0) {

    //     count--;
    // }

    let counter=setInterval(() => {

        updataCounter();
        count--;
        updataCounter();
    }, 1000);

    function updataCounter(){
        document.getElementById('count').innerHTML = count;
    }

</script>

@endsection


