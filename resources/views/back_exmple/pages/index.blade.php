@extends('back789658.admin')

@section('title', 'Toutes les pages')

@section('content')

    <div class="d-flex justify-content-between align-items-center mb-3">
        <a href="{{ route('back789658.page.form') }}" class="btn btn-primary">Ajouter une page</a>
    </div>

    <table class="table table-striped data-table">
        <thead>
        <tr>
            <th>Titre</th>
            <th>Slug</th>
            
            <th>Visibilité</th>
            <th>Template</th>

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
            url: "{{ route('back789658.page.index') }}",
            type: "POST",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          },
          columns: [
              {data: 'title', name: 'title'},
              {data: 'slug', name: 'slug'},
             
              {data: 'visible', name: 'visible'},
              {data: 'template_id', name: 'template_id'},
              {data: 'actions', name: 'actions', orderable: false, searchable: false},
          ],
         
      });
    });
</script>

@endsection