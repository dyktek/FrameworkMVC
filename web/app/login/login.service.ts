import { Injectable } from '@angular/core';
import {Http, Response, Headers} from '@angular/http';

@Injectable()
export class LoginService
{
    constructor(
        private http: Http) {
    }

    auth(loginData: Object) {

        var headers = new Headers();
        headers.append('Content-Type', 'application/x-www-form-urlencoded');

        return this.http.post('/api/auth', JSON.stringify(loginData),
            headers
        ).map((res: Response) => res.json());
    }
}