import {Pipe, PipeTransform} from 'angular2/core'

@Pipe({
   name: 'booksFilter'
})

export class BooksFilterPipe implements PipeTransform
{
    transform(value: any, args: string[]): any {
        let filter = args[0].toLocaleLowerCase();

        return filter ? value.filter(book => book.name.toLocaleLowerCase().indexOf(filter) != -1) : value;
    }
}