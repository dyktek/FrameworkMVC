import {Injectable} from 'angular2/core';
import {Book} from './book';
import {Http} from 'angular2/http';
import 'rxjs/add/operator/map';

@Injectable()
export class BookService
{
    books:Array<Book>;

    constructor(
        private _http: Http) {
    }

    getBooks() {

        return this._http.get('/api/books')
            .map(res => res.json());

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
    }
}