@extends('back789658.admin')

@section('title', 'Tous les articles')

@section('content')

    <div class="d-flex justify-content-between align-items-center mb-3">
        <a href="{{ route('back789658.article.form') }}" class="btn btn-primary">Ajouter un article</a>
    </div>

    <table class="table table-striped data-table">
        <thead>
        <tr>
            <th>Titre</th>
            <th>Categorie</th>
            <th>Publié</th>
            <th>Date</th>
            <th>Auteur(s)</th>
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
            url: "{{ route('back789658.article.index') }}",
            type: "POST",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          },
          columns: [
              {data: 'title', name: 'title'},
              {data: 'category', name: 'category'},
              {data: 'publish', name: 'publish'},
              {data: 'date', name: 'date'},
              {data: 'author', name: 'author'},
              {data: 'actions', name: 'actions', orderable: false, searchable: false},
          ],
         
      });
    });
</script>

@endsection