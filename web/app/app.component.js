System.register(['angular2/core', './book.service', './book.filter', 'angular2/http', './mod/mod.component'], function(exports_1) {
    var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
        var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
        if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
        else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
        return c > 3 && r && Object.defineProperty(target, key, r), r;
    };
    var __metadata = (this && this.__metadata) || function (k, v) {
        if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
    };
    var core_1, book_service_1, book_filter_1, http_1, mod_component_1;
    var AppComponent;
    return {
        setters:[
            function (core_1_1) {
                core_1 = core_1_1;
            },
            function (book_service_1_1) {
                book_service_1 = book_service_1_1;
            },
            function (book_filter_1_1) {
                book_filter_1 = book_filter_1_1;
            },
            function (http_1_1) {
                http_1 = http_1_1;
            },
            function (mod_component_1_1) {
                mod_component_1 = mod_component_1_1;
            }],
        execute: function() {
            AppComponent = (function () {
                function AppComponent(_bookService) {
                    this._bookService = _bookService;
                }
                AppComponent.prototype.getBooks = function () {
                    var _this = this;
                    this._bookService
                        .getBooks()
                        .subscribe(function (books) { return _this.books = books; }, function (error) { return console.log('onError: %s', error); });
                };
                AppComponent.prototype.ngOnInit = function () {
                    this.getBooks();
                };
                AppComponent = __decorate([
                    core_1.Component({
                        selector: 'my-app',
                        templateUrl: 'app/book.component.html',
                        providers: [book_service_1.BookService, http_1.HTTP_PROVIDERS],
                        pipes: [book_filter_1.BooksFilterPipe],
                        directives: [mod_component_1.ModComponent]
                    }), 
                    __metadata('design:paramtypes', [book_service_1.BookService])
                ], AppComponent);
                return AppComponent;
            })();
            exports_1("AppComponent", AppComponent);
        }
    }
});
//# sourceMappingURL=app.component.js.map