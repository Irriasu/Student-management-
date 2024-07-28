@php
    use App\Models\Filiere;
@endphp
<center>
    <h1>La liste des filieres</hi>
    <table border="1">
    <tr>
    <th>ID</th>
    <th>Nom</th> 
    <th colspan="3"> <a href="filieres/create">Add</a> </th>
    </tr>
    @foreach ($filieres as $fil)
    <tr>
    <td> {{$fil->id}} </td>
    <td> {{$fil->nom}} </td>
    <td> 
        <form action="filieres/{{$fil->id}}" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" value="delete">
        </form>
    </td>
    <td> <a href="filieres/{{$fil->id}}/edit ">Edit</a> </td>
    <td> <a href="filieres/{{$fil->id}}">Show</a> </td>
    </tr>
    @endforeach
    </table>
    </center>