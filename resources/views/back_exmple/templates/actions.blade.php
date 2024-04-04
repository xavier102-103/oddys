<div class="d-flex gap-2 w-100 justify-content-end">
    <a href="{{ route('back789658.template.form', ['id' => $template->id]) }}" class="btn btn-primary">Modifier</a>
    <a href="{{ route('back789658.content.index', ['entity_id' => $template->id , 'entity_type' => get_class($template)]) }}" class="btn btn-warning">Blocs</a>
    <form action="{{ route('back789658.template.destroy', $template) }}" method="post" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce template ?')" style="display:inline-block">
        @csrf
        @method("delete")
        <button class="btn btn-danger">Supprimer</button>
    </form> 
</div>