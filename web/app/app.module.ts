import { NgModule, provide }       from '@angular/core';
import { BrowserModule }  from '@angular/platform-browser';
import { FormsModule }    from '@angular/forms';
import { HttpModule, Http }     from '@angular/http';
import { AuthConfig, AuthHttp, JwtHelper } from 'angular2-jwt/angular2-jwt';

import { AppComponent }   from './app.component';
import { routing }        from './app.routing';
import { AuthGuard }      from './common/auth.guard';

import { CategoriesComponent } from './categories/categories.component';
import { CategoryEditComponent } from './categories/category-edit.component';
import { LoginComponent } from './login/login.component';

@NgModule({
    imports: [
        BrowserModule,
        FormsModule,
        HttpModule,
        routing
    ],
    declarations: [
        AppComponent,
        CategoriesComponent,
        CategoryEditComponent,
        LoginComponent
    ],
    providers: [
        AuthGuard, AuthHttp, JwtHelper,
        provide(AuthHttp, {
            useFactory: (http) => {
                return new AuthHttp(new AuthConfig({
                    headerName: 'token',
                    headerPrefix: '',
                    tokenName: 'id_token',
                    tokenGetter: (() => localStorage.getItem('id_token')),
                    globalHeaders: [{'Content-Type':'application/json'}],
                    noJwtError: true,
                    noTokenScheme: true
                }), http);
            },
            deps: [Http]
        })
    ],
    bootstrap: [ AppComponent ]
})
export class AppModule {
}