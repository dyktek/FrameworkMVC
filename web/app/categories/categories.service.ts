import { Injectable } from '@angular/core';
import { Response, Headers } from '@angular/http';
import { AuthHttp } from 'angular2-jwt';
import {Category} from "./category";


@Injectable()
export class CategoriesService
{
    constructor(
        private authHttp: AuthHttp) {
    }

    getCategories(page: Number) {
        return this.authHttp.get('/api/categories/' + page)
             .map((res: Response) => res.json());

    }

    getCategory(catId: Number) {
        return this.authHttp.get('/api/category/' + catId)
            .map((res: Response) => res.json());
    }

    saveCategory(category: Category) {
        let headers = new Headers();
        headers.append('Content-Type', 'application/json');

        if(category.catId > 0) {
            return this.authHttp.put('/api/category', JSON.stringify(category), {headers: headers})
                .map((res:Response) => res.json());
        } else {
            return this.authHttp.post('/api/category', JSON.stringify(category), {headers: headers})
                .map((res:Response) => res.json());
        }
    }
}