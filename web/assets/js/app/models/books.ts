import $ = require('jquery');

export class Books
{
    private booksList:Array<any>;

    constructor(){
        this.booksList = [{
            id: 1,
            name: 'Limes Infer',
            description: 'opis',
            author: 'autor'
        },{
            id: 2,
            name: 'Robota',
            description: 'opis',
            author: 'autor'
        },{
            id: 3,
            name: 'Andromeda',
            description: 'opis',
            author: 'autor'
        },{
            id: 4,
            name: 'Andridanek',
            description: 'opis',
            author: 'autor'
        },{
            id: 5,
            name: 'Apostrofa',
            description: 'opis',
            author: 'autor'
        }];
    }

    public getData(successFunction: (data: any) => void):void {
        var request = $.ajax({
            type: "GET",
            url: '/books',
            data: {},
            dataType: "json"
        });

        request.done(successFunction);
    }
}