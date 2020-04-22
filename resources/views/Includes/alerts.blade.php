<link rel="stylesheet" href="{{asset('css/alert_style.css')}}">
@if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif



@if (session('sucess'))
   <div class="alert alert-primary" role="alert">
   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
       {{ session('sucess') }}
</div>
@endif


@if (session('alert'))
   <div class="alert alert-danger">
   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
         {{ session('error')}}
</div>
@endif