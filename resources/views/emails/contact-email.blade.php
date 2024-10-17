<h1>Ciao Admin</h1>

<p>
    Hai ricevuto una nuova email da: <br>
    Nome: {{ $lead->name }} <br>
    Cognome: {{ $lead->surname }} <br>
    Telefono: {{ $lead->phone }} <br>
    Email: {{ $lead->email }} <br>
    Contenuto: <br>
    {{ $lead->content }}
</p>
