<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Contato - Ricardo Morais Arquitetura</title>
    <style>
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background-color: #f8f9fa;
            color: #111111;
            line-height: 1.6;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .header {
            background-color: #111111;
            color: #C5A880;
            padding: 30px;
            text-align: center;
        }
        .header h1 {
            margin: 0;
            font-size: 24px;
            font-weight: 600;
        }
        .content {
            padding: 30px;
        }
        .field {
            margin-bottom: 20px;
        }
        .field-label {
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 0.1em;
            color: #888888;
            margin-bottom: 5px;
            font-weight: 600;
        }
        .field-value {
            font-size: 16px;
            color: #111111;
            padding: 10px;
            background-color: #f8f9fa;
            border-radius: 4px;
        }
        .message-box {
            background-color: #f8f9fa;
            padding: 15px;
            border-radius: 4px;
            border-left: 3px solid #C5A880;
        }
        .footer {
            background-color: #f8f9fa;
            padding: 20px;
            text-align: center;
            font-size: 12px;
            color: #888888;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>NOVO CONTATO</h1>
            <p style="margin: 10px 0 0 0; opacity: 0.8;">Ricardo Morais Arquitetura</p>
        </div>
        
        <div class="content">
            
            <div class="field">
                <div class="field-label">Origem do contato</div>
                <div class="field-value">{{ $origin }}</div>
            </div>
            <div class="field">
                <div class="field-label">Nome</div>
                <div class="field-value">{{ $name }}</div>
            </div>
            
            <div class="field">
                <div class="field-label">Email</div>
                <div class="field-value">{{ $email }}</div>
            </div>
            
            <div class="field">
                <div class="field-label">Telefone</div>
                <div class="field-value">{{ $phone }}</div>
            </div>
            
            <div class="field">
                <div class="field-label">Complemento</div>
                <div class="field-value">{{ $complement }}</div>
            </div>
            
            <div class="field">
                <div class="field-label">Origem</div>
                <div class="field-value">{{ $origin }}</div>
            </div>
            
            <div class="field">
                <div class="field-label">Mensagem</div>
                <div class="message-box">
                    {{ $messageContent }}
                </div>
            </div>
            <div class="field">
                <div class="field-label">Complemento</div>
                <div class="message-box">
                    {{ $complement }}
                </div>
            </div>
        </div>
        
        <div class="footer">
            <p>Este email foi enviado através do formulário de contato do site.</p>
            <p>&copy; {{ date('Y') }} Ricardo Morais Arquitetura</p>
        </div>
    </div>
</body>
</html>
