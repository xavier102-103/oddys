@extends('back789658.admin')

@section('title', 'Tous les contacts')

@section('content')

    <table class="table table-striped data-table">
        <thead>
        <tr>
            <th>Nom</th>
            <th>Entreprise</th>
            <th>Sujet</th>
            <th>Message</th>
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
                    url: "{{ route('back789658.contact.index') }}",
                    type: "POST",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                },
                columns: [
                    {data: 'name', name: 'name'},
                    {data: 'company', name: 'company'},
                    {data: 'subject', name: 'subject'},
                    {data: 'message', name: 'message'},
                    {data: 'actions', name: 'actions', orderable: false, searchable: false},
                ],
                
            });
        });
    </script>

@endsection