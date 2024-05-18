export default class Route {
    constructor(url, title, pathHtml, authorize, pathJS = "") {
      this.url = url;
      this.title = title;
      this.pathHtml = pathHtml;
      this.pathJS = pathJS;
      this.authorize = authorize;
    }
}

/*
[] = accès à tous le monde
[disconnected] = accès à ceux déconnectés
[connected] = accès à ceux connectés
[admin] = accès à l'administrateur
[employe] = accès aux employés
[veterinaire] = accès au veterinaire
**/ 