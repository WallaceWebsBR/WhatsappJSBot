# Whatsapp JS Bot
Bot baseado no WhatsApp Web utilizando PHP, Javascript e o navegador Mozilla Firefox.

# Requisitos
Um servidor RDP
  - 2 GHZ de processador Quad Core
  - 3 Gigas de RAM ( Recomendado: 6 Gigas )
  - Browser Mozilla-Firefox e Tampermonkey ( Necessário desativar Content Security Policy - CSP )
  - Um servidor Apache com PHP
  - Um dispositivo Android com WhatsApp em segundo plano

# Localização dos Diretórios
Pasta Raiz da Hospedagem<br />
/index.php<br />
/funcs.php

# Instruções para o Funcionamento
1. Edite o arquivo index.php
2. Importe o arquivo bot.js no tampermonkey
3. Edite a URL para WebHook no final do Arquivo bot.js
4. Abra o WhatsApp Web e sincronize
5. Abra o console apertando F12 e verifique se os comandos estão sendo reconhecidos

# Bugs e Erros
- Visite minha Wiki
https://github.com/WallaceWebsBR/WhatsWebsBot/wiki

- É necessário um servidor com https, caso contrário haverá erro de conteúdo misto.
Ajuda de como desativar a proteção de conteúdo misto.
https://support.mozilla.org/en-US/kb/mixed-content-blocking-firefox

# Agradecimentos
Bruno222 ( Bot em JavaScript )
https://github.com/bruno222/whatsapp-web-bot/

NelsonGaldeman ( Ideia da API Externa )
https://github.com/bruno222/whatsapp-web-bot/issues/29#issuecomment-369263111
