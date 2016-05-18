import { Injectable } from '@angular/core';
import { Http, Response, Headers } from '@angular/http';
import 'rxjs/add/operator/map';
import {Category} from "./category";
;

@Injectable()
export class CategoriesService
{
    constructor(
        private http: Http) {
    }

    getCategories(page: Number) {
        return this.http.get('/api/categories/' + page)
             .map((res: Response) => res.json());

    }

    getCategory(catId: Number) {
        return this.http.get('/api/category/' + catId)
            .map((res: Response) => res.json());
    }

    saveCategory(category: Category) {
        return this.http.put('/api/category', JSON.stringify(category)).map((res: Response) => res.json());
    }
}