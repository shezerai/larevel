@include("header")
<header><h1>Lotto trekking</h1></header>
<main>
    <form class="form-group" method="POST" action="{{route('Trekking')}}">
        {{csrf_field()}}
        <fieldset>
            <label for="number1">insert first number</label>
            <input class="form-control" type="text" name="number1">
            <label for="number2">insert seconds number</label>
            <input class="form-control" type="text" name="number2">
            <label for="number3">insert third number</label>
            <input class="form-control" type="text" name="number3">
            <label for="number4">insert fourth number</label>
            <input class="form-control" type="text" name="number4">
            <label for="number5">insert fifth number</label>
            <input class="form-control" type="text" name="number5">
            <label for="number6">insert sixth number</label>
            <input class="form-control" type="text" name="number6">
            <input class="btn btn-primary" type="submit" value="doe trekking" name="submit">
        </fieldset>
    </form>
    @if($errors->any())
        @foreach($errors->any() as $error)
            {{$error}}
            @endforeach
    @endif

@include("footer")
