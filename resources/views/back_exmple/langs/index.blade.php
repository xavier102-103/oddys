@extends('back789658.admin')

@section('title', 'Toutes les langues')

@section('content')

    <div class="d-flex justify-content-between align-items-center mb-3">
        <a href="{{ route('back789658.lang.form') }}" class="btn btn-primary">
            Ajouter une langue
        </a>
    </div>

    <table class="table data-table table-striped">
        <thead>
        <tr>
            <th>Nom</th>
            <th>Tag</th>
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
            url: "{{ route('back789658.lang.index') }}",
            type: "POST",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          },
          columns: [
              {data: 'name', name: 'name'},
              {data: 'tag', name: 'tag'},
              {data: 'actions', name: 'actions', orderable: false, searchable: false},
          ],
      });
    });
</script>

@endsection