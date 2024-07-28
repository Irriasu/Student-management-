<section class="single">
    <table border="1">
        <tr>   
        </tr>
        @foreach ($etudiants as $etd)
        <tr>
        <td> {{$etd->id}} </td>
        <td> {{$etd->nom}} </td>
        <td> {{$etd->prenom}} </td>
        <td> {{$etd->sexe}}</td>
        <tr>
        @endforeach
            <a href="/etudiants"> Liste  </a>
        </tr>
     </table>
</section> 