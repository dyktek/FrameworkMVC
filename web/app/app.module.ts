import { NgModule }       from '@angular/core';
import { BrowserModule }  from '@angular/platform-browser';
import { FormsModule }    from '@angular/forms';
import { HttpModule }     from '@angular/http';
import { AuthHttp }       from 'angular2-jwt';

import { AppComponent }   from './app.component';
import { routing }        from './app.routing';
import { AuthGuard }      from './common/auth.guard';
import { AuthProvider }   from './common/auth.provider';
//
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
        AuthGuard,
        {provide: AuthHttp, useClass : AuthProvider}
    ],
    bootstrap: [ AppComponent ]
})
export class AppModule {
}