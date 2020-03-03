const http = require('http');
const hostname = '127.0.0.1';
const port = 8888;

const server = http.createServer((req, res) => {
    const path = req.url;
  if(path == '/home'){
      res.end("<H1>Welcome to the Homepage</H1>");
  }
  else if(path == '/getData'){
      res.setHeader('content-type', 'application/json');
      res.end(JSON.stringify({name:"Br. Burton",class:"cs313"},null ,1 ));
  }
  else
    res.end("<H1>404 page not found</H1>");
});

server.listen(port, () => {
    console.log(`Server running at http://${hostname}:${port}/`);
});