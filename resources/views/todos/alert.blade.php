<div>
    
    @if(session()->has('message'))
    {{$slot}}
    <div>{{session()->get('message')}}</div>
    @elseif(session()->has('error'))
    {{$slot}}
    <div>{{session()->get('error')}}</div>
    @endif 

    @if($error->any())
    <div>
        <ul>
            @foreach($error->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif

</div>