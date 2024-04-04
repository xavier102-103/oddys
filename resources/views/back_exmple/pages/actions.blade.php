<div class="d-flex gap-2 w-100 justify-content-end">
    <a href="{{ route('back789658.page.form', ['id' => $page->id]) }}" class="btn btn-primary">Modifier</a>
    <a href="{{ route('back789658.content.index', ['entity_id' => $page->id , 'entity_type' => get_class($page)]) }}" class="btn btn-warning">Blocs</a>
    <form action="{{ route('back789658.page.traduire', ['id' => $page->id]) }}" method="get">
            @csrf
            <select class="form-select w-auto d-inline" name="lang" id="lang">
                @foreach($langs as $lang)
                    <option value="{{$lang->tag}}">{{ $lang->name }}</option>
                @endforeach
            </select>
            <button type="submit" class="btn btn-success">Traduire</button>
    </form>
    <form action="{{ route('back789658.page.destroy', $page) }}" method="post" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cette page ?')">
        @csrf
        @method("delete")
        <button class="btn btn-danger">Supprimer</button>
    </form>
</div>