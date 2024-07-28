<section class="form">
    <h2>create form</h2>
   
    <form action="/filieres" method="post">
        @csrf
        <table>
            <tr>   
                <td>Nom:</td>
                <td><input type="text" name="nom"></td>
          
                <td><input type="submit" value="Envoyer"></td>
                <td><input type="reset" value="Annuler"></td>
            </tr>
        </table> 
    </form>
</section>
