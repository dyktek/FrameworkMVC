import { Injectable } from '@angular/core';
import { Router, CanActivate } from '@angular/router';
import { tokenNotExpired, JwtHelper } from 'angular2-jwt/angular2-jwt';


@Injectable()
export class AuthGuard implements CanActivate {
    constructor(
        private router: Router,
        private jwtHelper: JwtHelper = new JwtHelper()
    ) {

    }

    canActivate() {

        var token = localStorage.getItem('id_token');

        // console.log(
        //     this.jwtHelper.decodeToken(token),
        //     this.jwtHelper.getTokenExpirationDate(token),
        //     this.jwtHelper.isTokenExpired(token)
        // );

        if (tokenNotExpired()) {
            return true;
        }

        this.router.navigate(['backoffice/login']);
    }
}