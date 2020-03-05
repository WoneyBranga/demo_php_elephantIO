# Exemplo de utilizacao do PHP com Socket.IO e Elephant.IO

Exemplo decorrente das videoAulas https://www.youtube.com/watch?v=erl2yw-sq6E&list=PLf8BkXI6hjdjVRr2hdHHdCQ_w0MhQgeJQ com ajustes para minhas necessidades.

```shell=
# baixando dependencias
npm init
npm install --save express
npm install --save socket.io
npm install --save winston:2.*

composer  require wisembly/elephant.io
```

Estrutura:
    - server.js -> Servidor Socket.IO responsavel por receber e repassar msgs;
    - emissor.php -> exemplo de implementacao de emissor de novas mensagens;
    - clienteWeb.php -> exemplo de ouvinte realtime;


Para facilitar utilizacao, implementamos a criacao de um container docker para nosso server node.

