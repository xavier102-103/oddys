@extends('back789658.admin')

@section('title', 'Tous les partenaires')

@section('content')

    <div class="d-flex justify-content-between align-items-center mb-3">
        <a href="{{ route('back789658.partner.form') }}" class="btn btn-primary">Ajouter un partenaire</a>
    </div>

    <table class="table table-striped data-table">
        <thead>
        <tr>
            <th>Nom</th>
            <th>Url</th>
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
                    url: "{{ route('back789658.partner.index') }}",
                    type: "POST",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                },
                columns: [
                    {data: 'name', name: 'name'},
                    {data: 'url', name: 'url'},
                    {data: 'actions', name: 'actions', orderable: false, searchable: false},
                ],
                
            });
        });
    </script>

@endsection