<form method="POST" action="{{ route('filieres.update',$filiere) }}">
    @csrf
    @method('PUT')
</form>

