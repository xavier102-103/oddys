@extends('back789658.admin')

@section('title', 'Tous les contenus')
@section('content')
    @if (get_class($entity) === 'App\Models\Template')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <a href="{{ route('back789658.content.form',['entity_id'=>$entity->id,'entity_type'=>get_class($entity)]) }}" class="btn btn-primary">Ajouter un contenu</a>
    </div>
    @endif
    <table class="table data-table table-striped">
        <thead>
        <tr>
            <th></th>
            <th>Nom</th>
            <th>Type</th>
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
            url: "{{ route('back789658.content.index') }}",
            type: "POST",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                entity: '{{ $entity}}',
                entity_id :'{{$entity->id}}',
                entity_type :'{{get_class($entity)}}'
            },
           
          },
          columns: [
                {data:'id',name:'id'},
              {data: 'name', name: 'name'},
              
              {data: 'type', name: 'type'},
              {data: 'actions', name: 'actions', orderable: false, searchable: false},
          ],
         
      });
    });
</script>

@endsection