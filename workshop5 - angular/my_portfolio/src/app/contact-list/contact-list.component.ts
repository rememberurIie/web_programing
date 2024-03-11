import { Component } from '@angular/core';
import {CommonModule} from '@angular/common';
import { contacts } from './contact';

import { HeaderComponent } from '../header/header.component';
import { FooterComponent } from '../footer/footer.component';

@Component({
  selector: 'app-contact-list',
  standalone: true,
  imports: [
    CommonModule,
    HeaderComponent,
    FooterComponent
],
  templateUrl: './contact-list.component.html',
  styleUrl: './contact-list.component.css'
})

export class ContactListComponent {

  contacts = [...contacts]

}
