@php
    use App\Models\Filiere;
    $f = Filiere::all();
@endphp

<section class="form">
    <h2>create form</h2>
   
    <form action="/etudiants" method="post">
        @csrf
        <table>
            <tr>   
                <td>Nom:</td>
                <td><input type="text" name="nom"></td>
            </tr>
            <tr>
                <td>Prenom:</td>
                <td><input type="text" name="prenom"></td>
            </tr>
            <tr>
                <td>sexe:</td>
                <td><input type="radio" name="sexe" value="Male"><label>Male</label>
                    <input type="radio" name="sexe"value="Female"><label>Female</label></td>
            </tr>
            <tr>
                <td>filiere:</td>
                <td>
                    <select name="filiere">
                        @foreach ($f as $option)
                            <option value="{{$option->nom}}">{{$option->nom}}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <td><input type="submit" value="Envoyer"></td>
                <td><input type="reset" value="Annuler"></td>
            </tr>
        </table> 
    </form>
</section>
