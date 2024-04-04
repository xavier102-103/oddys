<div class="d-flex gap-2 w-100 justify-content-end">
    <a href="{{ route('back789658.skill.form', ['id' => $skill->id]) }}" class="btn btn-primary">Modifier</a>
    <form action="{{ route('back789658.skill.traduire', ['id' => $skill->id]) }}" method="get">
        @csrf
        <select class="form-select w-auto d-inline" name="lang" id="lang">
            @foreach($langs as $lang)
                <option value="{{$lang->tag}}">{{ $lang->name }}</option>
            @endforeach
        </select>
        <button type="submit" class="btn btn-success">Traduire</button>
    </form>
    <form action="{{ route('back789658.skill.destroy', $skill) }}" method="post" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce skill ?')" style="display:inline-block">
        @csrf
        @method("delete")
        <button class="btn btn-danger">Supprimer</button>
    </form> 
</div>