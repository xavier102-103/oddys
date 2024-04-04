@extends('back789658.admin')

@section('title', 'Toutes les formules')

@section('content')

    <div class="d-flex justify-content-between align-items-center mb-3">
        <a href="{{ route('back789658.formule.form') }}" class="btn btn-primary">Ajouter une formule</a>
    </div>

    <table class="table table-striped data-table">
        <thead>
        <tr>
            <th>Titre</th>
            <th>Description</th>
            <th>Type</th>
            <th>Populaire</th>
            <th>Publié</th>
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
            url: "{{ route('back789658.formule.index') }}",
            type: "POST",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          },
          columns: [
              {data: 'title', name: 'title'},
              {data: 'description', name: 'description'},
              {data: 'type', name: 'type'},
              {data: 'popular', name: 'popular'},
              {data: 'publish', name: 'publish'},
              {data: 'actions', name: 'actions', orderable: false, searchable: false},
          ],
         
      });
    });
</script>

@endsection