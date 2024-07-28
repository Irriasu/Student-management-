@php
    use App\Models\Filiere;
    
@endphp
<center>
    <h1>La liste des étudiants</hi>
    <table border="1">
    <tr>
    <th>ID</th>
    <th>Nom</th>
    <th>Prénom</th>
    <th>sexe</th>
    <th>filiere</th>
    <th colspan="3"> <a href="etudiants/create">Add</a> </th>
    </tr>
    @foreach ($etudiants as $etd)
    <tr>
    <td> {{$etd->id}} </td>
    <td> {{$etd->nom}} </td>
    <td> {{$etd->prenom}} </td>
    <td> {{$etd->sexe}}</td>
    <td> {{(Filiere::find($etd->filiere_id))->nom}}</td>
    <td> 
        <form action="etudiants/{{$etd->id}}" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" value="delete">
        </form>
    </td>
    <td> <a href="etudiants/{{$etd->id}}/edit ">Edit</a> </td>
    <td> <a href="etudiants/{{$etd->id}}">Show</a> </td>
    </tr>
    @endforeach
    </table>
    </center>