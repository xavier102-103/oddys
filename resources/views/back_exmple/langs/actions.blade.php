<div class="d-flex gap-2 w-100 justify-content-end">
    <a href="{{ route('back789658.lang.form', ['id' => $lang->id]) }}" class="btn btn-primary">Modifier</a>
    <form action="{{ route('back789658.lang.destroy', $lang) }}" method="post" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cette langue ?')" style="display:inline-block">
        @csrf
        @method("delete")
        <button class="btn btn-danger">Supprimer</button>
    </form> 
</div>