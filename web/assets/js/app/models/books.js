System.register(['jquery'], function(exports_1) {
    var $;
    var Books;
    return {
        setters:[
            function ($_1) {
                $ = $_1;
            }],
        execute: function() {
            Books = (function () {
                function Books() {
                    this.booksList = [{
                            id: 1,
                            name: 'Limes Infer',
                            description: 'opis',
                            author: 'autor'
                        }, {
                            id: 2,
                            name: 'Robota',
                            description: 'opis',
                            author: 'autor'
                        }, {
                            id: 3,
                            name: 'Andromeda',
                            description: 'opis',
                            author: 'autor'
                        }, {
                            id: 4,
                            name: 'Andridanek',
                            description: 'opis',
                            author: 'autor'
                        }, {
                            id: 5,
                            name: 'Apostrofa',
                            description: 'opis',
                            author: 'autor'
                        }];
                }
                Books.prototype.getData = function (successFunction) {
                    var request = $.ajax({
                        type: "GET",
                        url: '/books',
                        data: {},
                        dataType: "json"
                    });
                    request.done(successFunction);
                };
                return Books;
            })();
            exports_1("Books", Books);
        }
    }
});
//# sourceMappingURL=books.js.map