<div class="d-flex gap-2 w-100 justify-content-end">
    <a href="{{ route('back789658.collaborator.form', ['id' => $collaborator->id]) }}" class="btn btn-primary">Modifier</a>
    <form action="{{ route('back789658.collaborator.traduire', ['id' => $collaborator->id]) }}" method="get">
        @csrf
        <select class="form-select w-auto d-inline" name="lang" id="lang">
            @foreach($langs as $lang)
                <option value="{{$lang->tag}}">{{ $lang->name }}</option>
            @endforeach
        </select>
        <button type="submit" class="btn btn-success">Traduire</button>
    </form>
    <form action="{{ route('back789658.collaborator.destroy', $collaborator) }}" method="post" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce collaborateur ?')" style="display:inline-block">
        @csrf
        @method("delete")
        <button class="btn btn-danger">Supprimer</button>
    </form> 
</div>