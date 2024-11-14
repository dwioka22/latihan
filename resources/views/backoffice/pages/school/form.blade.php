 @extends ('backoffice.layouts.app')

 @section ('content')
 {{$data}}
 <div class="card">
     <div class="card-body">
         <form action="{{$data != null  ? route('admin.school.update', $data->id): route ('admin.school.store')}}" method="post">
            @csrf

            @if ($data != null)
                @method('PUT')
            @endif

             <div class="mb-3">
                 <label for="exampleInputEmail1" class="form-label">Email address</label>
                 <input type="text" name="name" value="{{$data->nama ?? ''}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                 <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
             </div>
            
             <button type="submit" class="btn btn-primary">Submit</button>
         </form>
     </div>
 </div>
 @endsection
