"use strict";
var $ = require('jquery');
var books = require('./models/books');
var App = (function () {
    function App() {
        var data = new books.Books();
        data.getData(function (result) {
            this.booksList = result;
            this.drawView();
            this.setFilter();
        }.bind(this));
    }
    App.prototype.setFilter = function () {
        var instance = this;
        $('#filter').keydown(function () {
            window.setTimeout(function () {
                var filtered = instance.booksList.filter(function (element) {
                    var regExp = new RegExp($(this).val().toLowerCase());
                    return regExp.test(element.name.toLowerCase());
                }.bind(this));
                instance.drawView(filtered);
            }.bind(this), 200);
        });
    };
    App.prototype.drawView = function (filtered) {
        var dataSource = (filtered) ? filtered : this.booksList;
        var listContainer = $('#list');
        listContainer.empty();
        listContainer.append('<table class="table table-hover" border="1"><tr><th>ID</th><th>Name</th><th>Desc</th><th>Author</th></tr></table>');
        var html = '';
        $.each(dataSource, function (key, value) {
            html += '<tr>' +
                '<td>' + value.id + '</td>' +
                '<td>' + value.name + '</td>' +
                '<td>' + value.description + '</td>' +
                '<td>' + value.author + '</td>' +
                '</tr>';
        });
        $(html).insertAfter(listContainer.find('tr'));
    };
    return App;
}());
exports.App = App;
//# sourceMappingURL=app.js.map