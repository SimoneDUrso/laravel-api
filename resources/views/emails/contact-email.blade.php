<div
    style="max-width: 600px; margin: 0 auto; font-family: Arial, sans-serif; border: 1px solid #e0e0e0; padding: 20px; border-radius: 10px; background-color: #f9f9f9;">
    <h1 style="text-align: center; font-weight: 700; color: #2c3e50;">Ciao Admin</h1>

    <p style="text-align: center; font-weight: 600; color: #34495e; font-size: 18px;">Hai ricevuto una nuova email da:
    </p>
    <hr style="border: 0; height: 1px; background-color: #e0e0e0; margin: 20px 0;">

    <p><strong>Nome:</strong> {{ $lead->name }}</p>
    <p><strong>Cognome:</strong> {{ $lead->surname }}</p>
    <p><strong>Email:</strong> <a href="mailto:{{ $lead->email }}" style="color: #3498db;">{{ $lead->email }}</a></p>
    <p><strong>Telefono:</strong> {{ $lead->phone }}</p>

    <hr style="border: 0; height: 1px; background-color: #e0e0e0; margin: 20px 0;">

    <p><strong>Contenuto:</strong></p>
    <div style="background-color: #ecf0f1; padding: 15px; border-radius: 5px;">
        {{ $lead->content }}
    </div>

    <p style="text-align: center; font-size: 14px; color: #95a5a6; margin-top: 30px;">Questa email è stata inviata da
        {{ $lead->name }} {{ $lead->surname }}</p>
</div>
