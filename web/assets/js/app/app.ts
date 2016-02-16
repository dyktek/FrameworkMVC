import $ = require('jquery');
import books = require('./models/books');

export class App
{
    private booksList;

    constructor() {
        var data = new books.Books();

        data.getData(function(result) {

            this.booksList = result;

            this.drawView();
            this.setFilter();

        }.bind(this));
    }

    private setFilter(){
        var instance = this;

        $('#filter').keydown(function(){

            window.setTimeout(function(){

                var filtered = instance.booksList.filter(function(element:any){

                    var regExp = new RegExp($(this).val().toLowerCase());

                    return regExp.test(element.name.toLowerCase());

                }.bind(this));

                instance.drawView(filtered);

            }.bind(this),200);

        });


    }

    private drawView(filtered?:Array<any>){

        var dataSource = (filtered) ? filtered : this.booksList;

        var listContainer =  $('#list');

        listContainer.empty();

        listContainer.append('<table class="table table-hover" border="1"><tr><th>ID</th><th>Name</th><th>Desc</th><th>Author</th></tr></table>');

        var html:string = '';

        $.each(dataSource, function(key, value){

            html += '<tr>' +
                        '<td>' + value.id + '</td>' +
                        '<td>' + value.name + '</td>' +
                        '<td>' + value.description + '</td>' +
                        '<td>' + value.author + '</td>' +
                    '</tr>';

        });

        $(html).insertAfter(listContainer.find('tr'));
    }
}