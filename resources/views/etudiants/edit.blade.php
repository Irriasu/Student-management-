<section class="form">
    <h2>edit fort</h2>
    <form action="/etudiants/{{$etudiants->id}}" method="post">
    @csrf
    @method('PUT')
     <table>
        <tr>   
            <td>Nom:</td>
            <td> <input type="text" name="nom" value= {{$etudiants->nom}} ></td>
        </tr>
        <tr>
            <td>Prenom:</td>
            <td><input type="text" name="prenom" value={{$etudiants->prenom}}></td>
        </tr>
        <tr>
            <td>sexe:</td>
            <td><input type="text" name="sexe" value={{$etudiants->sexe}}></td>
        </tr>
        <tr>
            <td>filiere:</td>
            <td><input type="text" name="filiere_id" value={{$etudiants->filiere_id}}></td>
        </tr>
        <tr>
            <td><input type="submit" value="Envoyer"></td>
            <td><input type="reset" value="Annuler"></td>
        </tr>
     </table> 
    
    </form>
</section>