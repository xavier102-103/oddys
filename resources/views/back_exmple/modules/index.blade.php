@extends('back789658.admin')

@section('title', 'Tous les modules')
@section('content')
   
    <div class="d-flex justify-module-between align-items-center mb-3">
        <a href="{{ route('back789658.module.form',['formule_id'=>$formule->id])}}" class="btn btn-primary">Ajouter un module</a>
    </div>
  
    <table class="table data-table table-striped">
        <thead>
        <tr>
            <th></th>
            <th>Nom</th>
            <th>Description</th>
            <th>Active</th>
            <th class="text-end">Actions</th>
        </tr>
        </thead>
        <tbody>
           
        </tbody>
    </table>

    
@endsection
@section('scripts')

<script>
    
    $(function () {
       
      var table = $('.data-table').DataTable({
           
          ajax: {
            url: "{{ route('back789658.module.index') }}",
            type: "POST",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                formule: '{{ $formule}}',
                formule_id :'{{$formule->id}}'
            },
           
          },
          columns: [
                {data:'id',name:'id'},
              {data: 'name', name: 'name'},
              
              {data: 'description', name: 'description'},
              {data: 'active', name: 'active'},
              {data: 'actions', name: 'actions', orderable: false, searchable: false},
          ],
         
      });
    });
</script>

@endsection