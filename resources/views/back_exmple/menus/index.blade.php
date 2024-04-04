@extends('back789658.admin')

@section('title', 'Tous les menus')

@section('content')

    <div class="d-flex justify-content-between align-items-center mb-3">
        <a href="{{ route('back789658.menu.form') }}" class="btn btn-primary">Ajouter un menu</a>
    </div>

    <table class="table table-striped data-table">
        <thead>
        <tr>
            <th>Libellé</th>
            <th>Slug</th>
            <th>Sort</th>
            <th>Visible</th>
            <th>Emplacement</th>
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
                    url: "{{ route('back789658.menu.index') }}",
                    type: "POST",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                },
                columns: [
                    {data: 'libelle', name: 'libelle'},
                    {data: 'slug', name: 'slug'},
                    {data: 'sort', name: 'sort'},
                    {data: 'visible', name: 'visible'},
                    {data: 'emplacement', name: 'emplacement'},
                    {data: 'actions', name: 'actions', orderable: false, searchable: false},
                ],
                
            });
        });
    </script>

@endsection