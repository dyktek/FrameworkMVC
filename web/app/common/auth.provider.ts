import { Component } from '@angular/core';
import { Http }     from '@angular/http';
import { AuthHttp, AuthConfig } from 'angular2-jwt';


@Component({
    providers : [
        AuthHttp, AuthConfig
    ]
})

export class AuthProvider {

    constructor(
        http: Http
    ) {

        return new AuthHttp(new AuthConfig({
            headerName: 'token',
            headerPrefix: '',
            tokenName: 'id_token',
            tokenGetter: (() => localStorage.getItem('id_token')),
            globalHeaders: [{'Content-Type':'application/json'}],
            noJwtError: true,
            noTokenScheme: true
        }), http);

    }
}
