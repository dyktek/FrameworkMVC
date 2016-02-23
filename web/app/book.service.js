System.register(['angular2/core', 'angular2/http', 'rxjs/add/operator/map'], function(exports_1) {
    var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
        var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
        if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
        else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
        return c > 3 && r && Object.defineProperty(target, key, r), r;
    };
    var __metadata = (this && this.__metadata) || function (k, v) {
        if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
    };
    var core_1, http_1;
    var BookService;
    return {
        setters:[
            function (core_1_1) {
                core_1 = core_1_1;
            },
            function (http_1_1) {
                http_1 = http_1_1;
            },
            function (_1) {}],
        execute: function() {
            BookService = (function () {
                function BookService(_http) {
                    this._http = _http;
                }
                BookService.prototype.getBooks = function () {
                    return this._http.get('/api/books')
                        .map(function (res) { return res.json(); });
                    //this.books = [{
                    //    id: 1,
                    //    name: 'Limies',
                    //    author: 'autor',
                    //    description: 'opis'
                    //},{
                    //    id: 1,
                    //    name: 'Wiesiek',
                    //    author: 'autor',
                    //    description: 'opis'
                    //},{
                    //    id: 1,
                    //    name: 'Robot',
                    //    author: 'autor',
                    //    description: 'opis'
                    //},{
                    //    id: 1,
                    //    name: 'RTZ',
                    //    author: 'autor',
                    //    description: 'opis'
                    //}];
                    //
                    //return this.books;
                };
                BookService = __decorate([
                    core_1.Injectable(), 
                    __metadata('design:paramtypes', [http_1.Http])
                ], BookService);
                return BookService;
            })();
            exports_1("BookService", BookService);
        }
    }
});
//# sourceMappingURL=book.service.js.map