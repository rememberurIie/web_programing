import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppComponent } from './app.component';
import { CommonModule } from '@angular/common'
import {NgIf} from '@angular/common';

import { SchoolListComponent } from './school-list/school-list.component';


@NgModule({
  imports: [
    BrowserModule,
    CommonModule,
    SchoolListComponent,
    NgIf
  ],
  declarations: [
    AppComponent
  ],
  bootstrap: [
    AppComponent
  ]
})
export class AppModule { }