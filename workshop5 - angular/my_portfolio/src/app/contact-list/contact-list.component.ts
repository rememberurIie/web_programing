import { Component } from '@angular/core';
import {CommonModule} from '@angular/common';
import { contacts } from './contact';

@Component({
  selector: 'app-contact-list',
  standalone: true,
  imports: [CommonModule],
  templateUrl: './contact-list.component.html',
  styleUrl: './contact-list.component.css'
})

export class ContactListComponent {

}
