<html>
    <div>
        <h2><a href="{{route('pagina-home')}}">Torna alla home</a></h2>
    </div>
    <div>
        <p> <strong>Titolo: </strong> {{$movie['title']}}</p>
        <p> <strong>Titolo Originale: </strong> {{$movie['original_title']}}</p>
        <p> <strong>Nazionalita': </strong> {{$movie['nationality']}}</p>
        <p> <strong>Data: </strong> {{$movie['date']}}</p>
        <p> <strong>Voto: </strong> {{$movie['vote']}}</p>
    </div>
</html>
