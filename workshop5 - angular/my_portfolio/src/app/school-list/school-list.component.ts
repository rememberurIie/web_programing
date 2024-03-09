import { Component } from '@angular/core';
import { schools } from './school';
import {CommonModule} from '@angular/common';

@Component({
  selector: 'app-school-list',
  standalone: true,
  imports: [CommonModule],
  templateUrl: './school-list.component.html',
  styleUrl: './school-list.component.css'
})
export class SchoolListComponent {
  schools = [...schools];
}
