<section class="form">
    <h2>edit fort</h2>
    <form action="/filieres/{{$filieres->id}}" method="post">
    @csrf
    @method('PUT')
     <table>
        <tr>   
            <td>Nom:</td>
            <td> <input type="text" name="nom" value= {{$filieres->nom}} ></td>
        
        <tr>
            <td><input type="submit" value="Envoyer"></td>
            <td><input type="reset" value="Annuler"></td>
        </tr>
     </table> 
    
    </form>
</section>