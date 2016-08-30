import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';

import { LoginService } from './login.service';


@Component({
    selector: 'my-app',
    templateUrl: 'app/login/login.component.html',
    providers: [LoginService]
})

export class LoginComponent {

    loginForm;
    
    constructor(
        private loginService: LoginService,
        private router: Router
    ) {

        this.loginForm = {
            useremail: '',
            password: ''
        };
    }


    login() {

        this.loginService.auth(this.loginForm)
            .subscribe(
            res => {
                if(res.status == 0) {
                    localStorage.setItem('id_token', res.token);
                    this.router.navigate(['/backoffice/categories']);
                }
            },
            error => console.error(error)
        );

        event.preventDefault();
    }
    
}