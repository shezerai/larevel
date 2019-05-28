
@include("header")

<main>
    @for($i=0;$i<6;$i++)
        @if($data[0][$i]==$data[1][$i])
            <p>correct cijfer</p>
        @else
            <p>fout cijfer het juiste cijfer was:{{$data[1][$i]}}</p>
        @endif
        <p> uw cijfer was:{{$data[0][$i]}}</p>
    @endfor
</main>

@include("footer")