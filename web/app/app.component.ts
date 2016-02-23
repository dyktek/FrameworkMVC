import {Component} from 'angular2/core';
import {BookService} from './book.service';
import {Book} from './book';
import {BooksFilterPipe} from './book.filter';
import {HTTP_PROVIDERS} from 'angular2/http';
import {ModComponent} from './mod/mod.component';

@Component({
    selector: 'my-app',
    templateUrl: 'app/book.component.html',
    providers: [BookService, HTTP_PROVIDERS],
    pipes: [BooksFilterPipe],
    directives: [ModComponent]
})

export class AppComponent
{
    books:Array<Book>;

    constructor(private _bookService: BookService) { }

    getBooks() {
        this._bookService
            .getBooks()
            .subscribe(
                books => this.books = books,
                error => console.log('onError: %s', error)
            );
    }

    ngOnInit() {
        this.getBooks();
    }
}