<form method="POST" action="{{ route('stagiaires.update',$stagiaires) }}">
    @csrf
    @method('PUT')
</form>

