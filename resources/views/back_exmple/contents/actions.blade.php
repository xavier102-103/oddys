<div class="d-flex gap-2 w-100 justify-content-end">
    <a href="{{ route('back789658.content.form', ['id' => $content->id,'entity_id'=>$content->entity_id,'entity_type'=>$entity]) }}" class="btn btn-primary">Modifier</a>
    <form action="{{ route('back789658.content.traduire', ['id' => $content->id]) }}" method="get" style="{{ $entity === 'App\Models\Template'  ? 'display:none' : '' }}">
            @csrf
            <select class="form-select w-auto d-inline" name="lang" id="lang">
            @foreach($langs as $lang)
                <option value="{{$lang->tag}}">{{ $lang->name }}</option>
             @endforeach
            </select>
            <button type="submit" class="btn btn-success">Traduire</button>
    </form>
    <form action="{{ route('back789658.content.destroy', $content) }}" method="post" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce contenu ?')">
        @csrf
        @method("delete")
        <button class="btn btn-danger">Supprimer</button>
    </form>
</div>