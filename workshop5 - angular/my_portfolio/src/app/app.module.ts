import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppComponent } from './app.component';
import { CommonModule } from '@angular/common'
import {NgIf} from '@angular/common';

import { SchoolListComponent } from './school-list/school-list.component';
import { HobbyListComponent } from './hobby-list/hobby-list.component';
import { ContactListComponent } from './contact-list/contact-list.component';
import { HeaderComponent } from './header/header.component';
import { FooterComponent } from './footer/footer.component';


@NgModule({
  imports: [
    BrowserModule,
    CommonModule,
    SchoolListComponent,
    HobbyListComponent,
    ContactListComponent,
    NgIf,
    HeaderComponent,
    FooterComponent
  ],
  declarations: [
  ],
  bootstrap: [
  ]
})
export class AppModule { }