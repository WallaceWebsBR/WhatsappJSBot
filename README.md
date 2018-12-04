# WhatsWebsBot
Bot baseado no WhatsApp Web, utilizando PHP, Javascript, Python e o navegador Mozilla Firefox

# Requisitos
Um servidor RDP
  - 3 GHZ de processador Quad Core
  - 4 Gigas de RAM ( Recomendado: 6 Gigas )
  - Browser Mozilla-Firefox e Tampermonkey ( Necessário desativar Content Security Policy - CSP )
  - Um servidor Apache com suporte a CGI
  - Um dispositivo Android com WhatsApp em segundo plano

# Localização dos Diretórios
Pasta Raiz da Hospedagem
/index.php
/logger.html
/piada.php

Pasta CGI do servidor
/bot.py

# Instruções para o Funcionamento
1. Edite o arquivo index.php
2. Importe o arquivo bot.js no tampermonkey
3. Edite a URL para WebHook na linha 221 do Arquivo bot.js
4. Abra o WhatsApp Web e sincronize
5. Abra o console apertando F12 e verifique se os comandos estão sendo reconhecidos

# Bugs e Erros
- É necessário um servidor com https, caso contrário haverá erro de conteúdo misto.
Ajuda de como desativar a proteção de conteúdo misto.
https://support.mozilla.org/en-US/kb/mixed-content-blocking-firefox

- Para servidores Windows é necessário alterar a primeira linha do arquivo bot.py informando o caminho executável do python.
Ex: #!C:\Python**\python.exe

# Agradecimentos
Bruno222 ( Bot em JavaScript )
https://github.com/bruno222/whatsapp-web-bot/

NelsonGaldeman ( Ideia da API Externa )
https://github.com/bruno222/whatsapp-web-bot/issues/29#issuecomment-369263111
