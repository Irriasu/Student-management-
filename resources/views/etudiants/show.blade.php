<section class="single">
    <h2 class="form_title" >{{$etudiants->nom}} {{$etudiants->prenom}}</h2>
    <table border="1">
        <tr>   
            <td>Nom:</td><td>{{$etudiants->nom}}</td>
        </tr>
        <tr>
            <td>Prenom:</td><td>{{$etudiants->prenom}} </td>
        </tr>
        <tr>
            <td>Sexe:</td><td>{{$etudiants->sexe}} </td>
        </tr>
        <tr>
            <td>filiere:</td><td>{{$etudiants->filiere_id}} </td>
        </tr>
        <tr>
            <a href="/etudiants"> Liste  </a>
        </tr>
     </table>
</section> 