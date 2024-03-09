import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { RouterModule } from '@angular/router';
import { ReactiveFormsModule } from '@angular/forms';

import { AppComponent } from './app.component';
import { TopBarComponent } from './top-bar/top-bar.component';
import { SchoolListComponent } from './school-list/school-list.component';

@NgModule({
  imports: [
    BrowserModule,
    ReactiveFormsModule,
    RouterModule.forRoot([
      { path: '', component: SchoolListComponent },
      
    ])
  ],
  declarations: [
    AppComponent,
    TopBarComponent,
    SchoolListComponent
  ],
  bootstrap: [
    AppComponent
  ]
})
export class AppModule { }