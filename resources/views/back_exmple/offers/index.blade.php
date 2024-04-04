@extends('back789658.admin')

@section('title', 'Toutes  les offres')

@section('content')

    <div class="d-flex justify-content-between align-items-center mb-3">
        <a href="{{ route('back789658.offer.form') }}" class="btn btn-primary">Ajouter une offre</a>
    </div>

    <table class="table table-striped data-table">
        <thead>
        <tr>
            <th>Titre</th>
            <th>Type</th>
            <th>Ville</th>
            <th>Publié</th>
            <th>Pays</th>
            <th>Salaire min</th>
            <th>Salaire max</th>
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
            url: "{{ route('back789658.offer.index') }}",
            type: "POST",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          },
          columns: [
              {data: 'title', name: 'title'},
              {data: 'type', name: 'type'},
              {data: 'city', name: 'city'},
              {data: 'publish', name: 'publish'},
              {data: 'country', name: 'country'},
              {data: 'salary_min', name: 'salary_min'},
              {data: 'salary_max', name: 'salary_max'},
              {data: 'actions', name: 'actions', orderable: false, searchable: false},
          ],
         
      });
    });
</script>

@endsection