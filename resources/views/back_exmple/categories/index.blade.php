@extends('back789658.admin')

@section('title', 'Toutes les catégories')

@section('content')

    <div class="d-flex justify-content-between align-items-center mb-3">
        <a href="{{ route('back789658.category.form') }}" class="btn btn-primary">
            Ajouter une categorie
        </a>
    </div>

    <table class="table data-table table-striped">
        <thead>
        <tr>
            <th>Nom</th>
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
            url: "{{ route('back789658.category.index') }}",
            type: "POST",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          },
          columns: [
              {data: 'name', name: 'name'},
              {data: 'actions', name: 'actions', orderable: false, searchable: false},
          ],
      });
    });
</script>

@endsection