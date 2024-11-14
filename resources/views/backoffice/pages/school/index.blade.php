 @extends ('backoffice.layouts.app')

 @section ('content')
 <a href="{{route('admin.school.create')}}" class="btn btn-primary">tambah data </a>
 <div class="card">
            <div class="card-body">
                <table class ="table table-hover  table-bordered  table-striped ">
                    <thead>
                        <th widht="10%">No</th>
                        <th widht="50%">No Kelas</th>
                        <th widht="20%">Dibuat</th>
                        <th widht="20%">Action</th>
                    </thead>
                    <tbody>
                        @foreach ($data as $index => $value)
                            <tr>
                               <td>
                                {{$index+1}}
                               </td>
                               <td>
                                {{$value->nama}}
                               </td>
                               <td>
                                {{$value->created_at}}
                               </td>
                                <td>
                               <a href="{{route('admin.school.edit',$value->id)}}" class= "btn btn-dark">Edit</a>
                               </td>
                            </tr>
                        @endforeach
                        
                    </tbody>

                </table>
            </div>
        </div>
@endsection       