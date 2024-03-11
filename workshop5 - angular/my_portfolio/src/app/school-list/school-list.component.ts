import { Component } from '@angular/core';
import {CommonModule} from '@angular/common';
import { schools } from './school';
import { HeaderComponent } from '../header/header.component';
import { FooterComponent } from '../footer/footer.component';

@Component({
  selector: 'app-school-list',
  standalone: true,
  imports: [   
    CommonModule,
    HeaderComponent,
    FooterComponent
  ],
  templateUrl: './school-list.component.html',
  styleUrl: './school-list.component.css'
})

export class SchoolListComponent {

  schools = [...schools];

}
